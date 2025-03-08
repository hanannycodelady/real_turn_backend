<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matches extends Model
{
    use HasFactory;

    public $table = 'matches';

    protected $fillable = [
        'tournament_id',
        'player1_id',
        'player2_id',
        'round',
        'court_number',
        'start_time',
        'end_time',
        'status',
        'score',
        'winner_id',
        'highlights_video_url',
        'match_stats'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'match_stats' => 'array'
    ];

    // Relationships
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function player1()
    {
        return $this->belongsTo(Players::class, 'player1_id');
    }

    public function player2()
    {
        return $this->belongsTo(Players::class, 'player2_id');
    }

    public function winner()
    {
        return $this->belongsTo(Players::class, 'winner_id');
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    // Helper methods
    public function getDurationAttribute()
    {
        if ($this->end_time && $this->start_time) {
            return $this->end_time->diffInMinutes($this->start_time);
        }
        return null;
    }

    public function getIsCompletedAttribute()
    {
        return $this->status === 'completed';
    }

    public function getIsInProgressAttribute()
    {
        return $this->status === 'in_progress';
    }
}
