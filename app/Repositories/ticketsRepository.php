<?php

namespace App\Repositories;

use App\Models\tickets;
use App\Repositories\BaseRepository;

/**
 * Class ticketsRepository
 * @package App\Repositories
 * @version March 3, 2025, 11:58 am UTC
*/

class ticketsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tickets::class;
    }
}
