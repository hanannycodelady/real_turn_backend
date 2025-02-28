<?php

namespace App\Repositories;

use App\Models\Bio; 
use App\Repositories\BaseRepository;

/**
 * Class BioRepository
 * @package App\Repositories
 * @version February 27, 2025, 1:41 am UTC
*/

class BioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'player_id',
        'more_about_player',
        'sub_heading',
        'paragraph',
        'Career',
        'paragraph',
        'career',
        'paragraph'
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
        return Bio::class;
    }
}
