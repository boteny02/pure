<?php

namespace App\Repositories;

use App\Models\Books;
use App\Repositories\BaseRepository;

/**
 * Class BooksRepository
 * @package App\Repositories
 * @version October 23, 2019, 8:57 am UTC
*/

class BooksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'author_name',
        'publish_year',
        'publisher'
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
        return Books::class;
    }
}
