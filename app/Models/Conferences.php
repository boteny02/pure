<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Conferences
 * @package App\Models
 * @version October 23, 2019, 9:04 am UTC
 *
 * @property string article_title
 * @property string author_name
 * @property string publish_year
 * @property string abstract
 * @property string keyword
 * @property string location
 * @property string organiser
 */
class Conferences extends Model
{
    use SoftDeletes;

    public $table = 'conferences';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'article_title',
        'author_name',
        'publish_year',
        'abstract',
        'keyword',
        'location',
        'organiser'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article_title' => 'string',
        'author_name' => 'string',
        'publish_year' => 'string',
        'abstract' => 'string',
        'keyword' => 'string',
        'location' => 'string',
        'organiser' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'article_title' => 'required',
        'author_name' => 'required',
        'publish_year' => 'required',
        'abstract' => 'required',
        'keyword' => 'required',
        'location' => 'required',
        'organiser' => 'required'
    ];

    
}
