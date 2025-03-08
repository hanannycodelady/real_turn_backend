<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class coach_overview
 * @package App\Models
 * @version February 28, 2025, 11:47 am UTC
 *
 * @property integer $player_id
 * @property string $First_name
 * @property string $Last_name
 * @property string $profile_image
 * @property string $nationality
 * @property string $country_flag
 * @property string $latest_video
 * @property string $latest_video_description
 * @property string $latest_image
 * @property string $latest_image_description
 * @property string $player_name
 * @property string $player_image
 */
class coach_overview extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'coach_overviews';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'player_id',
        'First_name',
        'Last_name',
        'profile_image',
        'nationality',
        'country_flag',
        'latest_video',
        'latest_video_description',
        'latest_image',
        'latest_image_description',
        'player_name',
        'player_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'player_id' => 'integer',
        'First_name' => 'string',
        'Last_name' => 'string',
        'profile_image' => 'string',
        'nationality' => 'string',
        'country_flag' => 'string',
        'latest_video' => 'string',
        'latest_video_description' => 'string',
        'latest_image' => 'string',
        'latest_image_description' => 'string',
        'player_name' => 'string',
        'player_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'player_id' => 'required|array|exists:playes,id',
        'First_name' => 'required|string|max:255',
        'Last_name' => 'required|string|max:255',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'nationality' => 'required|string|exits:nationality,id',
        'country_flag' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'latest_video' => 'required|image|mimes:mp4,mov,avi|max:102400',
        'latest_video_description' => 'required|string',
        'latest_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'latest_image_description' => 'nullable string',
        'player_name' => 'required|string|max:255',
        'player_image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    ];

    
}
