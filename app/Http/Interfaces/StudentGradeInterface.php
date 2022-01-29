<?php
namespace App\Http\Interfaces;
use Illuminate\Http\Request;
use App\Http\Requests\StudentGrades\StoreStudentGrade;
use App\Http\Requests\StudentGrades\UpdateStudentGrade;

interface StudentGradeInterface{
    
   public function index($student_id);
   public function create($student_id);
   public function store(StoreStudentGrade $request, $student_id);
   public function showStudentsGrade();
   public function edit($id, $student_id);
   public function update(UpdateStudentGrade $request, $id, $student_id);
   public function destroy($id, $student_id);
}