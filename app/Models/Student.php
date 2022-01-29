<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'first_name',
        'second_name',
        'third_name',
        'last_name',
        'email',
    ];


    public function studentGrade()
    {
        return $this->hasMany(StudentGrade::class);
    }
}
