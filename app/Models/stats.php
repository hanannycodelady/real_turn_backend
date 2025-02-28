<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class stats
 * @package App\Models
 * @version February 27, 2025, 1:18 pm UTC
 *
 * @property integer $player_id
 * @property integer $match_played
 * @property integer $match_won
 * @property integer $match_lost
 * @property integer $aces
 * @property integer $double_faults
 * @property integer $First_serve_percentage
 * @property number $First_serve_percentage_won
 * @property number $First_serve_points_won
 * @property decimal(5 $second_serve_points_won
 * @property decimal(5 $break_points_saved
 * @property decimal(5 $service_game_won
 * @property decimal(5 $service_points_won
 * @property decimal(5 $return_point_won
 * @property decimal(5 $break_points_converted
 * @property number $return_ponts_won
 * @property won $total_points
 * @property integer $tournaments_played
 * @property number $winning_on_first_serve
 * @property _on_second_serve $winninning
 * @property integer $rank
 * @property number $second_return_points_won
 * @property number $return_games_played
 * @property integer $year
 */
class stats extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'stats';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'player_id',
        'match_played',
        'match_won',
        'match_lost',
        'aces',
        'double_faults',
        'First_serve_percentage',
        'First_serve_percentage_won',
        'First_serve_points_won',
        'second_serve_points_won',
        'break_points_saved',
        'service_game_won',
        'service_points_won',
        'return_point_won',
        'break_points_converted',
        'return_ponts_won',
        'total_points',
        'tournaments_played',
        'winning_on_first_serve',
        'winninning',
        'rank',
        'second_return_points_won',
        'return_games_played',
        'year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'player_id' => 'integer',
        'match_played' => 'integer',
        'match_won' => 'integer',
        'match_lost' => 'integer',
        'aces' => 'integer',
        'double_faults' => 'integer',
        'First_serve_percentage' => 'integer',
        'First_serve_percentage_won' => 'decimal:2',
        'First_serve_points_won' => 'decimal:2',
        'return_ponts_won' => 'decimal:2',
        'tournaments_played' => 'integer',
        'winning_on_first_serve' => 'decimal:2',
        'rank' => 'integer',
        'second_return_points_won' => 'decimal:2',
        'return_games_played' => 'decimal:2',
        'year' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'player_id' => 'required|reference:players',
        'match_played' => 'required',
        'match_won' => 'required',
        'match_lost' => 'required',
        'aces' => 'required',
        'double_faults' => 'required',
        'First_serve_percentage_won' => 'required',
        'First_serve_points_won' => 'required',
        'second_serve_points_won' => 'required',
        'break_points_saved' => 'required',
        'service_game_won' => 'required',
        'service_points_won' => 'required',
        'return_point_won' => 'required',
        'break_points_converted' => 'required',
        'return_ponts_won' => 'required',
        'total_points' => 'required',
        'tournaments_played' => 'required',
        'winning_on_first_serve' => 'required',
        'winninning' => 'required',
        'rank' => 'required',
        'second_return_points_won' => 'required',
        'return_games_played' => 'required',
        'year' => 'none specified'
    ];

    
}
