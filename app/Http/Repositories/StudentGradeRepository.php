<?php
namespace App\Http\Repositories;
use App\Http\Interfaces\StudentGradeInterface;
use Illuminate\Http\Request;
use App\Http\Requests\StudentGrades\StoreStudentGrade;
use App\Http\Requests\StudentGrades\UpdateStudentGrade;
use App\Models\StudentGrade;
use Validator;
use Hash;

class StudentGradeRepository implements StudentGradeInterface{


    private $studentGradeModel;

    public function __construct(StudentGrade $student_grade)
    {
        $this->studentGradeModel = $student_grade;
    }

   public function index($student_id)
   {    
        $student_grades =  $this->studentGradeModel->with('student')->where('student_id', $student_id)->get();
        return view('admin.student_grades.index', compact('student_grades', 'student_id'));
   }

   public function create($student_id)
   {
        return view('admin.student_grades.create', compact('student_id'));
   }


   public function store(StoreStudentGrade $request, $student_id)
   {
       $this->studentGradeModel->create([
            'student_id'        => $request->student_id,
            'grade'             => $request->grade,
            'seating_number'    => $request->seating_number,
        ]);

        alert()->success('Added successfully');
        return redirect()->route('student-grades.index', $student_id);
   }

   public function showStudentsGrade()
   {   
        $student_grades =  $this->studentGradeModel->with('student')->get();
        return view('admin.student_grades.show', compact('student_grades'));
   }

   public function edit($student_id, $id)
   {
        $row = $this->studentGradeModel->where('id', $id)->first();
        return view('admin.student_grades.edit', compact('row', 'student_id'));
   }

   public function update(UpdateStudentGrade $request, $student_id, $id)
   {
  
    $this->studentGradeModel->where('id', $id)->update([
        'student_id'        => $request->student_id,
        'grade'             => $request->grade,
        'seating_number'    => $request->seating_number,
    ]);
  
    alert()->success('Updated successfully', 'Done');
    return back();
   
   }

   public function destroy($student_id, $id)
   {    
        $student_grade = $this->studentGradeModel->where('id', $id);
        $student_grade->delete();
        alert()->success('Deleted successfully');
        return back();
   }


}