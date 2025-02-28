<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Overview
 * @package App\Models
 * @version February 26, 2025, 3:31 pm UTC
 *
 * @property integer $player_id
 * @property integer $ranking
 * @property string $Category
 * @property string $player_image
 * @property string $First_name
 * @property string $Last_name
 * @property decimal(5 $Height
 * @property string $Plays
 * @property integer $age
 * @property string $date_of_birth
 * @property string $coach_name
 * @property DECIMAL(5 $win_lose_ratio
 * @property integer $current_ranking
 * @property string(255) $video_url
 * @property string $video_description
 * @property integer $video_order
 * @property integer $title_year
 * @property string $title_image
 */
class Overview extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'overviews';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'player_id',
        'ranking',
        'Category',
        'player_image',
        'First_name',
        'Last_name',
        'Height',
        'Plays',
        'age',
        'date_of_birth',
        'coach_name',
        'win_lose_ratio',
        'current_ranking',
        'video_url',
        'video_description',
        'video_order',
        'title_year',
        'title_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'player_id' => 'integer',
        'ranking' => 'integer',
        'Category' => 'string',
        'player_image' => 'string',
        'First_name' => 'string',
        'Last_name' => 'string',
        'Height' => 'decimal:2',
        'Plays' => 'string',
        'age' => 'integer',
        'date_of_birth' => 'date',
        'coach_name' => 'string',
        'current_ranking' => 'integer',
        'video_description' => 'string',
        'video_order' => 'integer',
        'title_year' => 'integer',
        'title_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'player_id' => 'required|references:Players',
        'ranking' => 'required|numeric',
        'Category' => 'required|in:Single,Double,Mixed_doubles',
        'player_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        'First_name' => 'required|String|max:255',
        'Last_name' => 'required|string|max:255',
        'Height' => 'required|numeric',
        'Plays' => 'required|in:Right-handed,Left-handed',
        'age' => 'required|numeric|min:2|max:100',
        'date_of_birth' => 'required|date|before :today',
        'coach_name' => 'required|string |',
        'win_lose_ratio' => 'required',
        'current_ranking' => 'required',
        'video_url' => 'required',
        'video_description' => 'nullable',
        'video_order' => 'required',
        'title_year' => 'requied',
        'title_image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    ];


}
