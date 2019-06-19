<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'cpf', 'thumbnail', 'status'
    ];
}
