<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Score
 * @package App\Models
 * @version March 2, 2025, 2:31 pm UTC
 *
 * @property integer $tournament_id
 * @property string $stage
 * @property integer $player1_id
 * @property integer $player2_id
 * @property string $player1_score
 * @property string $player2_score
 * @property integer $winner_id
 * @property string $round
 */
class Score extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'scores';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tournament_id',
        'stage',
        'player1_id',
        'player2_id',
        'player1_score',
        'player2_score',
        'winner_id',
        'round'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tournament_id' => 'integer',
        'stage' => 'string',
        'player1_id' => 'integer',
        'player2_id' => 'integer',
        'player1_score' => 'string',
        'player2_score' => 'string',
        'winner_id' => 'integer',
        'round' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tournament_id' => 'required,exists:Tournament,id',
        'stage' => 'required',
        'player1_id' => 'required,exists:players,id',
        'player2_id' => 'required,exists:players,id,different:player1_id',
        'player1_score' => 'required|string|reqex:/^(\d+-\d+(\^\d+)?(\s\d+-\d+(\^\d+)?)*|bye)$/',
        'player2_score' => 'required|string|regex:/^(\d+-\d+(\^\d+)?(s\d+-\d+(\^\d+)?)*|bye)$/',
        'winner_id' => 'requred,exists:players,id',
        'round' => 'required'
    ];

    public function tournament()
{
    return $this->belongsTo(Tournament::class);
}

}
