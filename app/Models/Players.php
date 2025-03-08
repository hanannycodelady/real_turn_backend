<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Players
 * @package App\Models
 */
class Players extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'players';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'first_name',
        'second_name',
        'gender',
        'player_image',
        'flag_image',
        'ranking',
        'points',
        'category',
        'nationality',
        'user_id' // Added to link with User model
    ];

    protected $casts = [
        'first_name' => 'string',
        'second_name' => 'string',
        'gender' => 'string',
        'player_image' => 'string',
        'flag_image' => 'string',
        'ranking' => 'integer',
        'points' => 'integer',
        'category' => 'string',
        'nationality' => 'string',
        'user_id' => 'integer'
    ];

    public static $rules = [
        'first_name' => 'required|min:2|max:255|alpha',
        'second_name' => 'required|min:2|max:255|alpha',
        'gender' => 'required|in:female,male',
        'player_image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
        'flag_image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048',
        'ranking' => 'required|integer|min:1',
        'points' => 'required|integer|min:0',
        'category' => 'required|in:Singles,Doubles,Mixed_doubles',
        'nationality' => 'required|string|max:255',
        'user_id' => 'required|exists:users,id'
    ];

    // User relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Bio relationship
    public function bio()
    {
        return $this->hasOne(Bio::class);
    }

    // Matches relationships
    public function homeMatches()
    {
        return $this->hasMany(Matches::class, 'player1_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(Matches::class, 'player2_id');
    }

    public function matches()
    {
        return $this->homeMatches()->union($this->awayMatches());
    }

    // Tournament relationship
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'tournament_players')
            ->withTimestamps()
            ->withPivot(['status', 'seed_number']);
    }

    // Tickets relationship
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // Scores relationship
    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    // Stats relationship
    public function stats()
    {
        return $this->hasOne(Stats::class);
    }

    // Communities relationship
    public function communities()
    {
        return $this->belongsToMany(Community::class, 'community_players')
            ->withTimestamps()
            ->withPivot(['role', 'joined_at']);
    }

    // Galleries relationship
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    // Videos relationship
    public function videos()
    {
        return $this->hasMany(Videos::class);
    }

    // Rank relationship
    public function rank()
    {
        return $this->hasOne(Rank::class);
    }

    // Helper methods
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->second_name}";
    }

    public function getMatchesWonAttribute()
    {
        return $this->matches()->where('winner_id', $this->id)->count();
    }

    public function getMatchesLostAttribute()
    {
        return $this->matches()->where('status', 'completed')
            ->where('winner_id', '!=', $this->id)
            ->count();
    }

    public function getTournamentsWonAttribute()
    {
        return $this->tournaments()
            ->wherePivot('status', 'winner')
            ->count();
    }

    public function getCurrentRankAttribute()
    {
        return $this->rank()->latest()->first();
    }
}
