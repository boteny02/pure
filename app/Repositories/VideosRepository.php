<?php

namespace App\Repositories;

use App\Models\Videos;
use App\Repositories\BaseRepository;

/**
 * Class VideosRepository
 * @package App\Repositories
 * @version October 23, 2019, 9:06 am UTC
*/

class VideosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'murl'
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
