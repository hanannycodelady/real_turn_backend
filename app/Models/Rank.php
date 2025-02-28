<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Rank
 * @package App\Models
 * @version February 27, 2025, 2:14 pm UTC
 *
 * @property integer $player_id
 * @property integer $rank
 * @property string $ranking_date
 * @property integer $previous_rank
 * @property integer $single_career_highest_rank
 * @property string $single_career_highest_date
 * @property integer $double_career_highest_rank
 * @property string $double_career_highest_date
 * @property integer $mixed_doubles_highest_rank
 * @property string $mixed_doubles_highest_date
 * @property integer $year
 * @property integer $year_start_rank
 * @property integer $year_end_rank
 */
class Rank extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ranks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'player_id',
        'rank',
        'ranking_date',
        'previous_rank',
        'single_career_highest_rank',
        'single_career_highest_date',
        'double_career_highest_rank',
        'double_career_highest_date',
        'mixed_doubles_highest_rank',
        'mixed_doubles_highest_date',
        'year',
        'year_start_rank',
        'year_end_rank'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'player_id' => 'integer',
        'rank' => 'integer',
        'ranking_date' => 'date',
        'previous_rank' => 'integer',
        'single_career_highest_rank' => 'integer',
        'single_career_highest_date' => 'date',
        'double_career_highest_rank' => 'integer',
        'double_career_highest_date' => 'date',
        'mixed_doubles_highest_rank' => 'integer',
        'mixed_doubles_highest_date' => 'date',
        'year' => 'integer',
        'year_start_rank' => 'integer',
        'year_end_rank' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'player_id' => 'required|referece:players',
        'rank' => 'required',
        'ranking_date' => 'required',
        'previous_rank' => 'required',
        'single_career_highest_rank' => 'required',
        'single_career_highest_date' => 'required',
        'double_career_highest_rank' => 'required',
        'double_career_highest_date' => 'required',
        'mixed_doubles_highest_rank' => 'required',
        'mixed_doubles_highest_date' => 'required',
        'year' => 'required',
        'year_start_rank' => 'required',
        'year_end_rank' => 'required'
    ];

    
}
