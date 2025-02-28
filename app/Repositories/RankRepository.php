<?php

namespace App\Repositories;

use App\Models\Rank;
use App\Repositories\BaseRepository;

/**
 * Class RankRepository
 * @package App\Repositories
 * @version February 27, 2025, 2:14 pm UTC
*/

class RankRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'player_id',
        'rank',
        'ranking_date',
        'previous_rank',
        'single_career_highest_rank',
        'single_career_highest_date',
        'double_career_highest_rank',
        'double_career_highest_date',
        'mixed_doubles_highest_rank',
        'mixed_doubles_highest_date',
        'year',
        'year_start_rank',
        'year_end_rank'
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
        return Rank::class;
    }
}
