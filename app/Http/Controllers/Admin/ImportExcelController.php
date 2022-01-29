<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\StudentDataImport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use SweetAlert;


class ImportExcelController extends Controller
{
    public function importStudentGrade(Request $request)
    {
      try{

          $validator = Validator::make($request->all(), [
            'student_sheet' => 'required|mimes:xlsx'
          ],[
            'mimes' => 'Extention File Not xlsx',
          ]);

          if($validator->fails())
          {
              return back()->withErrors($validator)->withInput();
          }

          Excel::import(new StudentDataImport, $request->file('student_sheet'));
          alert()->success('Students have been successfully added', 'Done');
          return back();

        }catch(\Exception $ex){
          alert()->error('Error Upload File', 'Error');
          return back();
        }

    }

}
