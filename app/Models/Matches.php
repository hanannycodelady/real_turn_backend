<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matches extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'matches';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'player_id',
        'match_date',
        'opponent_first_name',
        'opponent_last_name',
        'tournament',
        'score',
        'match_round',
        'result',
        'duration',
        'surface',
        'location',
        'prize_money',
        'opponent_ranking',
        'oppo_flag_image',
        'oppo_country',
        'status'
    ];

    protected $casts = [
        'player_id' => 'integer',
        'match_date' => 'datetime',
        'opponent_first_name' => 'string',
        'opponent_last_name' => 'string',
        'tournament' => 'string',
        'score' => 'string',
        'match_round' => 'string',
        'result' => 'string',
        'duration' => 'string',
        'surface' => 'string',
        'location' => 'string',
        'prize_money' => 'decimal:2',
        'opponent_ranking' => 'integer',
        'oppo_flag_image' => 'string',
        'oppo_country' => 'string',
        'status' => 'string'
    ];

    public static $rules = [
        'player_id' => 'required|exists:players,id', 
        'match_date' => 'required|date',
        'opponent_first_name' => 'required|min:2|max:255|alpha',
        'opponent_last_name' => 'required|min:2|max:255|alpha',
        'tournament' => 'required|string|min:2|max:255',
        'score' => 'nullable|string|regex:/^(\d+-\d+(\^\d+)?(\s\d+-\d+(\^\d+)?)*|bye)$/',
        'match_round' => 'required|in:Round of 128,Round of 64,Round of 32,Round of 16,Quarter_finals,Semi_final,Final',
        'result' => 'required|in:W,L',
        'duration' => 'required|date_format:H:i:s',
        'surface' => 'required|in:clay,hard,indoor,grass',
        'location' => 'required|min:2|max:255',
        'prize_money' => 'required|numeric|min:0',
        'opponent_ranking' => 'required|integer|min:1',
        'oppo_flag_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'oppo_country' => 'required|string|max:255',
        'status' => 'required|in:completed,ongoing,canceled'
    ];

    /**
     * Relationship: A match belongs to a player.
     */
    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
}


