<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'name',
        'country_id',
        'state_id',
        'level_id',
        'course_id',
        'situation',
        'start_month',
        'start_year',
        'finish_month',
        'finish_year',
        'student_id',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }
}
