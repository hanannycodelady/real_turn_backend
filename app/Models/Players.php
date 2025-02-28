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
    ];

    // Relationships
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'player_tournaments');
    }

    public function overview()
    {
        return $this->hasOne(PlayerOverview::class);
    }

    public function stats()
    {
        return $this->hasOne(PlayerStats::class);
    }

    public function ranking()
    {
        return $this->hasOne(PlayerRanking::class);
    }
}
