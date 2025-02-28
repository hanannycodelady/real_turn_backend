<?php

namespace App\Repositories;

use App\Models\stats;
use App\Repositories\BaseRepository;

/**
 * Class statsRepository
 * @package App\Repositories
 * @version February 27, 2025, 1:18 pm UTC
*/

class statsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'player_id',
        'match_played',
        'match_won',
        'match_lost',
        'aces',
        'double_faults',
        'First_serve_percentage',
        'First_serve_percentage_won',
        'First_serve_points_won',
        'second_serve_points_won',
        'break_points_saved',
        'service_game_won',
        'service_points_won',
        'return_point_won',
        'break_points_converted',
        'return_ponts_won',
        'total_points',
        'tournaments_played',
        'winning_on_first_serve',
        'winninning',
        'rank',
        'second_return_points_won',
        'return_games_played',
        'year'
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
        return stats::class;
    }
}
