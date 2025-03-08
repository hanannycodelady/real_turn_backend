<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Matches;
use App\Models\Ticket;
use App\Models\Gallery;
use App\Models\Videos;

class Tournament extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'tournaments';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'tournament_name',
        'tournament_category',
        'start_date',
        'end_date',
        'venue',
        'location',
        'surface',
        'prize_money',
        'prize_money_currency',  
        'certificate',
        'status',
        'sponsor_name',
        'draw_size',
        'tournament_logo',
        'tournament_director'
    ];

    protected $casts = [
        'tournament_name' => 'string',
        'tournament_category' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'venue' => 'string',
        'location' => 'string',
        'surface' => 'string',
        'prize_money' => 'float',
        'prize_money_currency' => 'string',  
        'certificate' => 'string',
        'status' => 'string',
        'sponsor_name' => 'string',
        'draw_size' => 'integer',
        'tournament_logo' => 'string',
        'tournament_director' => 'string'
    ];

    public static $rules = [
        'tournament_name' => 'required|min:2|max:255',
        'tournament_category' => 'required|string|min:2|max:255',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
        'venue' => 'required|min:2|max:255',
        'location' => 'required|string|min:2|max:255',
        'surface' => 'required|in:Clay,Grass,Hard',
        'prize_money' => 'required|numeric|min:0',
        'prize_money_currency' => 'required|in:USD,EUR,GBP,INR,AUD,CAD,JPY,ZAR,UGX,KES,TZS,RWF',  
        'certificate' => 'required|in:Gold,Silver,Bronze,Merit,Participation,Both',
        'status' => 'required|in:Upcoming,Ongoing,Completed',
        'sponsor_name' => 'nullable|string|max:255',
        'draw_size' => 'required|integer|min:0|max:128',
        'tournament_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'tournament_director' => 'required|string|max:255'
    ];

    // Relationships
    public function players()
    {
        return $this->belongsToMany(User::class, 'tournament_players');
    }

    public function matches()
    {
        return $this->hasMany(Matches::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }
}
