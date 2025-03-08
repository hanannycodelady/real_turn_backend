<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Schools
 * @package App\Models
 * @version March 2, 2025, 9:38 am UTC
 *
 * @property string $School_name
 * @property string $location
 * @property string $school_image
 * @property string $School_description
 */
class Schools extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'schools';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'School_name',
        'location',
        'school_image',
        'School_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'School_name' => 'string',
        'location' => 'string',
        'school_image' => 'string',
        'School_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'School_name' => 'required|string|max:255',
        'location' => 'required|string',
        'school_image' => 'required|image|mimes:jpeg,png,jpg',
        'School_description' => 'required|string'
    ];

    
}
