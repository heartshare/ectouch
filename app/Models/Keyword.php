<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Keyword
 */
class Keyword extends Model
{
    protected $table = 'keywords';

    public $timestamps = false;

    protected $fillable = [
        'date',
        'searchengine',
        'keyword',
        'count'
    ];

    protected $guarded = [];

        
}