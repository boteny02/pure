<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * @package App\Models
 * @version October 30, 2019, 11:30 am UTC
 *
 * @property string title
 * @property string author_name
 * @property string publish_year
 * @property string publisher
 */
class Book extends Model
{
    use SoftDeletes;

    public $table = 'books';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'author_name',
        'publish_year',
        'publisher'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'author_name' => 'string',
        'publish_year' => 'string',
        'publisher' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'author_name' => 'required',
        'publish_year' => 'required',
        'publisher' => 'required'
    ];

    
}
