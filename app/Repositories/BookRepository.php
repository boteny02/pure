<?php

namespace App\Repositories;

use App\Models\Book;
use App\Repositories\BaseRepository;

/**
 * Class BookRepository
 * @package App\Repositories
 * @version October 30, 2019, 11:30 am UTC
*/

class BookRepository extends BaseRepository
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
        return Book::class;
    }
}
