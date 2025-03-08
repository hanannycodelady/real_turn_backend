<?php

namespace App\Repositories;

use App\Models\Schools;
use App\Repositories\BaseRepository;

/**
 * Class SchoolsRepository
 * @package App\Repositories
 * @version March 2, 2025, 9:38 am UTC
*/

class SchoolsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'School_name',
        'location',
        'school_image',
        'School_description'
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
        return Schools::class;
    }
}
