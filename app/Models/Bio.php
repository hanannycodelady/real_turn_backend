<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Players;
use App\Models\User;

/**
 * Class Bio
 *
 * @package App\Models
 * @version February 27, 2025, 1:41 am UTC
 *
 * @property integer $player_id
 * @property string $more_about_player
 * @property string $sub_heading1
 * @property string $paragraph1
 * @property string $career_highlights
 * @property string $paragraph2
 * @property string $career_review
 * @property string $paragraph3
 * @property string $date_of_birth
 * @property string $place_of_birth
 * @property string $height
 * @property string $weight
 * @property string $plays
 * @property string $turned_pro
 * @property string $coach
 * @property string $career_titles
 * @property string $biography
 * @property string $social_media_links
 */
class Bio extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'bio';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'player_id',
        'more_about_player',
        'sub_heading1',
        'paragraph1',
        'career_highlights',
        'paragraph2',
        'career_review',
        'paragraph3',
        'date_of_birth',
        'place_of_birth',
        'height',
        'weight',
        'plays',
        'turned_pro',
        'coach',
        'career_titles',
        'biography',
        'social_media_links'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'player_id'           => 'integer',
        'more_about_player'   => 'string',
        'sub_heading1'        => 'string',
        'paragraph1'          => 'string',
        'career_highlights'   => 'string',
        'paragraph2'          => 'string',
        'career_review'       => 'string',
        'paragraph3'          => 'string',
        'date_of_birth' => 'date',
        'height' => 'float',
        'weight' => 'float',
        'turned_pro' => 'date',
        'career_titles' => 'integer',
        'social_media_links' => 'array'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'player_id'           => 'required|exists:players,id',
        'more_about_player'   => 'required|max:500',
        'sub_heading1'        => 'nullable|max:255',
        'paragraph1'          => 'required',
        'career_highlights'   => 'required|max:255',
        'paragraph2'          => 'required',
        'career_review'       => 'required',
        'paragraph3'          => 'required'
    ];

    // Relationships
    public function player()
    {
        return $this->belongsTo(Players::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
