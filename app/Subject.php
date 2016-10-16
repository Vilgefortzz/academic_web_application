<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'ECTS'
    ];

    public function students(){

        return $this->belongsToMany(Student::class)->withTimestamps();
    }

    public function teachers(){

        return $this->belongsToMany(Teacher::class)->withTimestamps();
    }
}
