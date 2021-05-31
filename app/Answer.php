<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //protected $visible = ['answer'];
    // protected $fillable = [
    //     "answer",
    //     "question_id"
    // ];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
