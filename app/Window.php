<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Window extends Model
{
    protected $fillable = [
        'title',
        'description',
        'link'
    ];
}
