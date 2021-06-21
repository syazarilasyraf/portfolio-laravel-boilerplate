<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Android extends Model
{
    protected $fillable = [
        'title',
        'description',
        'link'
    ];
}
