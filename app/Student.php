<?php

namespace App;

use App\Notifications\StudentResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'thumbnail', 'status', 'phone', 'occupation_area_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPassword($token));
    }

    public function formations()
    {
        return $this->hasMany('App\Formation');
    }
    public function professionals()
    {
        return $this->hasMany('App\Professional');
    }
    public function language_students()
    {
        return $this->hasMany('App\LanguageStudent');
    }
    public function knowledge_students()
    {
        return $this->hasMany('App\KnowledgeStudent');
    }
    public function occupation_area()
    {
        return $this->belongsTo('App\OccupationArea');
    }
}
