<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class communities
 * @package App\Models
 * @version March 2, 2025, 9:48 am UTC
 *
 * @property string $community_name
 * @property string $venue_location
 * @property string $community_description
 * @property string $community_image
 */
class communities extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'communities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'community_name',
        'venue_location',
        'community_description',
        'community_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'community_name' => 'string',
        'venue_location' => 'string',
        'community_description' => 'string',
        'community_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'community_name' => 'required|string|max:255',
        'venue_location' => 'required|string',
        'community_description' => 'required|string',
        'community_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
    ];

    
}
