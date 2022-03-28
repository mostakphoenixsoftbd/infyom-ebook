<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Author
 * @package App\Models
 * @version March 24, 2022, 7:03 am UTC
 *
 * @property string $name
 * @property string $bio
 * @property string $image
 */
class Author extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'authors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'bio',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'bio' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'bio' => 'required'
    ];

    
}
