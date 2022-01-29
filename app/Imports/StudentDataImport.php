<?php

namespace App\Imports;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Collection;
use App\Models\Student;
use App\Models\StudentGrade;
use Auth;



//class TeleSalesDataImport implements ToModel
class StudentDataImport implements ToCollection, WithStartRow

{
    public function startRow(): int
    {
        return 2;
    }

    public function collection(Collection $rows)
    {
        // TODO: Implement collection() method.
        /** Get Rows Students From Excel Sheet */
        foreach($rows as $student) {

            /** Check Student */
            $checkStudent = Student::where([['first_name', $student[0]], ['second_name', $student[1]], ['third_name', $student[2]], ['last_name', $student[3]]])->first();
            
            /** If Student True */
            if($checkStudent){

                /** Check Student Grade */
                $checkStudentGrade = StudentGrade::where('student_id', $checkStudent->id)->first(); 
                
                /** IF Student Grade False */
                if(!$checkStudentGrade){
                    StudentGrade::create([
                        'student_id'            => $checkStudent->id,
                        'grade'                 => $student[5],
                        'seating_number'        => $student[6],
                    ]);
                }
              
            /** If Student False */
            }else{
             
                /** Create New Student */
                $studentID = Student::insertGetId([
                    'first_name'        => $student[0],
                    'second_name'       => $student[1],
                    'third_name'        => $student[2],
                    'last_name'         => $student[3],
                    'email'             => $student[4]
                ]);

                StudentGrade::create([
                    'student_id'            => $studentID,
                    'grade'                 => $student[5],
                    'seating_number'        => $student[6],
                ]);
            }
        }

        alert()->success('Students have been successfully added', 'Done');
    }

  
    
}
