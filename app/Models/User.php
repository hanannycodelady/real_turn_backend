<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'First_name',
        'Last_name',
        'Email_address',
        'password',
        'Contact'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Format phone number to international E.164 format before saving
    public function setContactAttribute($value)
    {
        $this->attributes['Contact'] = preg_replace('/\s+/', '', $value);
    }
}
