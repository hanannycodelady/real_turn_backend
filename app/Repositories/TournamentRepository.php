<?php

namespace App\Repositories;

use App\Models\Tournament;
use App\Repositories\BaseRepository;

/**
 * Class TournamentRepository
 * @package App\Repositories
 * @version February 24, 2025, 3:02 pm UTC
*/

class TournamentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tournament_name',
        'tournament_category',
        'Start_date',
        'end_date',
        'Venue',
        'Location',
        'surface',
        'Prize_money',
        'certificate',
        'status',
        'sponsor_name',
        'Draw_size',
        'Tournament_logo',
        'Tournament_director'
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
        return Tournament::class;
    }
}
