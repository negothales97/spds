<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subknowledge extends Model
{
    protected $fillable = [
        'name',
        'knowledge_id',
    ];
}
