<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeStudent extends Model
{
    protected $fillable = [
        'knowledge_id',
        'subknowledge_id',
        'student_id',
    ];

    public function knowledge()
    {
        return $this->belongsTo('App\Knowledge');
    }
    public function subknowledge()
    {
        return $this->belongsTo('App\Subknowledge');
    }
}
