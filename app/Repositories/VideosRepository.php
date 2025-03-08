<?php

namespace App\Repositories;

use App\Models\Videos;
use App\Repositories\BaseRepository;

/**
 * Class VideosRepository
 * @package App\Repositories
 * @version March 2, 2025, 8:41 am UTC
*/

class VideosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'video_url',
        'video',
        'video_date'
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
        return Videos::class;
    }
}
