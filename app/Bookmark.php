<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable = [
        'linkimg',
        'title',
        'description',
        'link'
    ]; //
}
