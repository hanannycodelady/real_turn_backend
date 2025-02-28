<?php

namespace App\Repositories;

use App\Models\Players;
use App\Repositories\BaseRepository;

class PlayersRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'First_name',
        'Second_name',
        'gender',
        'Player_image',
        'Flag_image',
        'ranking',
        'Points',
        'Category'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return Players::class;
    }

    
}
