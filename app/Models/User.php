<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'First_name',
        'Last_name',
        'Email_address',
        'password',
        'Contact',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Set the password attribute and hash it.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Format the Contact attribute to international E.164 format.
     *
     * @param  string  $value
     * @return void
     */
    public function setContactAttribute($value)
    {
        $phone = preg_replace('/[^0-9+]/', '', $value); // Remove non-numeric characters except +
        if (substr($phone, 0, 2) === '00') {
            $phone = '+' . substr($phone, 2);
        } elseif (substr($phone, 0, 1) === '0') {
            $phone = '+256' . substr($phone, 1); // Adjust country code as needed (e.g., +256 for Uganda)
        } elseif (substr($phone, 0, 1) !== '+') {
            $phone = '+' . $phone;
        }
        $this->attributes['Contact'] = $phone;
    }

    /**
     * Get the column name for authentication (replaces default 'email').
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'Email_address';
    }

    // Relationships
    public function bio()
    {
        return $this->hasOne(Bio::class);
    }

    public function matches()
    {
        return $this->hasMany(Matches::class, 'player_id');
    }

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'tournament_players');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class, 'player_id');
    }

    public function stats()
    {
        return $this->hasOne(Stats::class);
    }

    public function communities()
    {
        return $this->belongsToMany(Community::class, 'community_members');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }

    public function rank()
    {
        return $this->hasOne(Rank::class);
    }
}
