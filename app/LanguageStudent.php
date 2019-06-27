<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageStudent extends Model
{
    protected $fillable = [
        'language_id', 'level', 'student_id'
    ];

    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
