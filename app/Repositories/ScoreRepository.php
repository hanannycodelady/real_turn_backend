<?php

namespace App\Repositories;

use App\Models\Score;
use App\Repositories\BaseRepository;

/**
 * Class ScoreRepository
 * @package App\Repositories
 * @version March 2, 2025, 2:31 pm UTC
*/

class ScoreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tournament_id',
        'stage',
        'player1_id',
        'player2_id',
        'player1_score',
        'player2_score',
        'winner_id',
        'round'
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
        return Score::class;
    }
}
