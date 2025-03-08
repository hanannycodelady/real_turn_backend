<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class tickets
 * @package App\Models
 * @version March 3, 2025, 11:58 am UTC
 *
 * @property integer $calendar_id
 * @property string $ticket_type
 * @property number $price
 * @property integer $quantity
 * @property integer $available_tickets
 * @property integer $sold_tickets
 * @property string $currency
 * @property string $status
 * @property boolean $is_available
 */
class tickets extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tickets';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'calendar_id',
        'ticket_type',
        'price',
        'quantity',
        'available_tickets',
        'sold_tickets',
        'currency',
        'status',
        'is_available'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'calendar_id' => 'integer',
        'ticket_type' => 'string',
        'price' => 'decimal:2',
        'quantity' => 'integer',
        'available_tickets' => 'integer',
        'sold_tickets' => 'integer',
        'currency' => 'string',
        'status' => 'string',
        'is_available' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'calendar_id' => 'required,exists:calendars,id',
        'ticket_type' => 'required',
        'price' => 'nullable',
        'quantity' => 'nullable',
        'available_tickets' => 'required|min:0',
        'sold_tickets' => 'nullable|min:0',
        'currency' => 'required',
        'status' => 'required',
        'is_available' => 'required'
    ];

    
}
