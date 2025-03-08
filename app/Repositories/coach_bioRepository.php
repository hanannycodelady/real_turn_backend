<?php

namespace App\Repositories;

use App\Models\coach_bio;
use App\Repositories\BaseRepository;

/**
 * Class coach_bioRepository
 * @package App\Repositories
 * @version February 28, 2025, 2:05 pm UTC
*/

class coach_bioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'heading',
        'content',
        'heading',
        'content',
        'heading',
        'content',
        'heading',
        'content'
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
        return coach_bio::class;
    }
}
