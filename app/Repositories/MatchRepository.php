<?php

namespace App\Repositories;

use App\Models\Matches;
use App\Repositories\BaseRepository;

class MatchRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'match_date',
        'opponent_first_name',
        'opponent_last_name',
        'tournament',
        'score',
        'match_round',
        'result',
        'duration',
        'surface',
        'location',
        'prize_money',
        'opponent_ranking',
        'oppo_flag_image',
        'oppo_country',
        'status'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return Matches::class;
    }
}
