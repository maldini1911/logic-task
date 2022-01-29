<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'grade',
        'seating_number',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
