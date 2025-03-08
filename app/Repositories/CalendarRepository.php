<?php

namespace App\Repositories;

use App\Models\Calendar;
use App\Repositories\BaseRepository;

/**
 * Class CalendarRepository
 * @package App\Repositories
 * @version March 4, 2025, 6:34 am UTC
*/

class CalendarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Calendar::class;
    }
}
