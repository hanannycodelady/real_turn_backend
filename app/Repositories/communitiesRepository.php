<?php

namespace App\Repositories;

use App\Models\communities;
use App\Repositories\BaseRepository;

/**
 * Class communitiesRepository
 * @package App\Repositories
 * @version March 2, 2025, 9:48 am UTC
*/

class communitiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'community_name',
        'venue_location',
        'community_description',
        'community_image'
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
        return communities::class;
    }
}
