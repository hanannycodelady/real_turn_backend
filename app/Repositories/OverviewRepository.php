<?php

namespace App\Repositories;

use App\Models\Overview;
use App\Repositories\BaseRepository;

/**
 * Class OverviewRepository
 * @package App\Repositories
 * @version February 26, 2025, 3:31 pm UTC
*/

class OverviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'player_id',
        'ranking',
        'Category',
        'player_image',
        'First_name',
        'Last_name',
        'Height',
        'Height',
        'Height',
        'Plays',
        'age',
        'date_of_birth',
        'coach_name',
        'win_lose_ratio',
        'current_ranking',
        'video_url',
        'video_description',
        'video_order',
        'title_year',
        'title_image'
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
        return Overview::class;
    }
}
