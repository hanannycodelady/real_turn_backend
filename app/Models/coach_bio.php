<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class coach_bio
 * @package App\Models
 * @version February 28, 2025, 2:05 pm UTC
 *
 * @property string $heading_1
 * @property string $content
 * @property string $heading_2
 * @property string $content
 * @property string $heading_3
 * @property string $content
 * @property string $heading_4
 * @property string $content
 */
class coach_bio extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'coach_bios';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'heading_1',
        'content_1',
        'heading_2',
        'content_2',
        'heading_3',
        'content_3',
        'heading_4',
        'content_4'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'heading_1' => 'string',
        'content_1' => 'string',
        'heading_2' => 'string',
        'content_2' => 'string',
        'heading_3' => 'string',
        'content_3' => 'string',
        'heading_4' => 'string',
        'content_4' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'heading_1' => 'required|string|max:255',
        'content_1' => 'required|strings|min:500',
        'heading_2' => 'required|string|max:255',
        'content_2' => 'required|string|min:500',
        'heading_3' => 'required|string|max:255',
        'content_3' => 'required|string|min:500',
        'heading_4' => 'required|string|max:255',
        'content_4' => 'required|string|min:500'
    ];


}
