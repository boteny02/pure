<?php

namespace App\Repositories;

use App\Models\Journals;
use App\Repositories\BaseRepository;

/**
 * Class JournalsRepository
 * @package App\Repositories
 * @version October 23, 2019, 9:05 am UTC
*/

class JournalsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author_name',
        'publish_year',
        'abstract',
        'keyword',
        'publisher',
        'volume'
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
        return Journals::class;
    }
}
