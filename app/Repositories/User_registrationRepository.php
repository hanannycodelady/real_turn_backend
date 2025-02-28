<?php

namespace App\Repositories;

use App\Models\User_registration;
use App\Repositories\BaseRepository;

/**
 * Class User_registrationRepository
 * @package App\Repositories
 * @version February 21, 2025, 2:05 pm UTC
*/

class User_registrationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'First_name',
        'Last_name',
        'Email_address',
        'password',
        'Contact'
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
        return User_registration::class;
    }
}
