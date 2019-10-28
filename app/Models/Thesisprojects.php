<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Thesisprojects
 * @package App\Models
 * @version October 23, 2019, 9:05 am UTC
 *
 * @property string title
 * @property string matric
 * @property string candidate_name
 * @property string grad_year
 * @property string abstract
 * @property string keyword
 * @property string supervisor
 * @property string dept
 * @property string faculty
 */
class Thesisprojects extends Model
{
    use SoftDeletes;

    public $table = 'thesisprojects';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'matric' => 'string',
        'candidate_name' => 'string',
        'grad_year' => 'string',
        'abstract' => 'string',
        'keyword' => 'string',
        'supervisor' => 'string',
        'dept' => 'string',
        'faculty' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'matric' => 'required',
        'candidate_name' => 'required',
        'grad_year' => 'required',
        'abstract' => 'required',
        'keyword' => 'required',
        'supervisor' => 'required',
        'dept' => 'required',
        'faculty' => 'required'
    ];

    
}
