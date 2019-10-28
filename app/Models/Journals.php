<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Journals
 * @package App\Models
 * @version October 23, 2019, 9:05 am UTC
 *
 * @property string author_name
 * @property string publish_year
 * @property string abstract
 * @property string keyword
 * @property string publisher
 * @property string volume
 */
class Journals extends Model
{
    use SoftDeletes;

    public $table = 'journals';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'author_name',
        'publish_year',
        'abstract',
        'keyword',
        'publisher',
        'volume'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_name' => 'string',
        'publish_year' => 'string',
        'abstract' => 'string',
        'keyword' => 'string',
        'publisher' => 'string',
        'volume' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author_name' => 'required',
        'publish_year' => 'required',
        'abstract' => 'required',
        'keyword' => 'required',
        'publisher' => 'required',
        'volume' => 'required'
    ];

    
}
