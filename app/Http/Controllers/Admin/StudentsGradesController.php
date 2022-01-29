<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Interfaces\StudentGradeInterface;
use App\Http\Requests\StudentGrades\StoreStudentGrade;
use App\Http\Requests\StudentGrades\UpdateStudentGrade;

class StudentsGradesController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    private $studentGradeInterface;
    
    public function __construct(StudentGradeInterface $studentGradeInterface)
    {   
        $this->studentGradeInterface = $studentGradeInterface;
    }

    public function index($student_id)
    {
        return $this->studentGradeInterface->index($student_id);
    }

    public function create($student_id)
    {
        return $this->studentGradeInterface->create($student_id);
    }

    public function store(StoreStudentGrade $request, $student_id)
    {
        return $this->studentGradeInterface->store($request, $student_id);
    }

    public function showStudentsGrade()
    {
        return $this->studentGradeInterface->showStudentsGrade();
    }


    public function edit($id, $student_id)
    {
        return $this->studentGradeInterface->edit($id, $student_id);
    }

    public function update(UpdateStudentGrade $request, $id, $student_id)
    {
        return $this->studentGradeInterface->update($request, $id, $student_id);
    }

    public function destroy($id, $student_id)
    {
        return $this->studentGradeInterface->destroy($id, $student_id);
    }
}