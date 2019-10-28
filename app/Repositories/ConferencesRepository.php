<?php

namespace App\Repositories;

use App\Models\Conferences;
use App\Repositories\BaseRepository;

/**
 * Class ConferencesRepository
 * @package App\Repositories
 * @version October 23, 2019, 9:04 am UTC
*/

class ConferencesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'article_title',
        'author_name',
        'publish_year',
        'abstract',
        'keyword',
        'location',
        'organiser'
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
        return Conferences::class;
    }
}
