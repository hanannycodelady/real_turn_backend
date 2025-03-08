<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Videos extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'videos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'video_url',
        'video',
        'video_date'
    ];

    protected $casts = [
        'video_url' => 'string',
        'video' => 'string',
        'video_date' => 'date'
    ];

    public static $rules = [
        'video_url' => 'required|url',
        'video' => 'required|string',
        'video_date' => 'required|date'
    ];
}
