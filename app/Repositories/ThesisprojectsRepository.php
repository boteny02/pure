<?php

namespace App\Repositories;

use App\Models\Thesisprojects;
use App\Repositories\BaseRepository;

/**
 * Class ThesisprojectsRepository
 * @package App\Repositories
 * @version October 23, 2019, 9:05 am UTC
*/

class ThesisprojectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'matric',
        'candidate_name',
        'grad_year',
        'abstract',
        'keyword',
        'supervisor',
        'dept',
        'faculty'
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
        return Thesisprojects::class;
    }
}
