<?php

namespace App\Repositories;

use App\Models\coach_overview;
use App\Repositories\BaseRepository;

/**
 * Class coach_overviewRepository
 * @package App\Repositories
 * @version February 28, 2025, 11:47 am UTC
*/

class coach_overviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'player_id',
        'First_name',
        'Last_name',
        'profile_image',
        'nationality',
        'country_flag',
        'latest_video',
        'latest_video_description',
        'latest_image',
        'latest_image_description',
        'player_name',
        'player_image'
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
        return coach_overview::class;
    }
}
