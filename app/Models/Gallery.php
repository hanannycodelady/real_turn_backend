<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gallery
 * @package App\Models
 * @version March 2, 2025, 9:13 am UTC
 *
 * @property string $Image_file
 * @property string $image_description
 * @property string $image_date
 */
class Gallery extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'galleries';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Image_file',
        'image_description',
        'image_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Image_file' => 'string',
        'image_description' => 'string',
        'image_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Image_file' => 'reaquired|image|mimes|jpeg,png,jpg|max:2048',
        'image_description' => 'required|string',
        'image_date' => 'required|date'
    ];

    
}
