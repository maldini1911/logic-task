<?php
namespace App\Http\Repositories;
use App\Http\Interfaces\StudentInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Students\StoreStudent;
use App\Http\Requests\Students\UpdateStudent;
use App\Models\Student;
use Validator;
use Hash;

class StudentRepository implements StudentInterface{


    private $studentModel;

    public function __construct(Student $student)
    {
        $this->studentModel =  $student;
    }

   public function index()
   {    
        $students =  $this->studentModel->get();
        return view('admin.students.index', compact('students'));
   }

   public function create()
   {
        return view('admin.students.create');
   }


   public function store(StoreStudent $request)
   {

       $this->studentModel->create([
            'first_name'        => $request->first_name,
            'second_name'       => $request->second_name,
            'third_name'        => $request->third_name,
            'last_name'         => $request->last_name,
            'email'             => $request->email 
        ]);

        alert()->success('Added successfully');
        return redirect()->route('students.index');
   }


   public function edit($id)
   {
        $row = $this->studentModel->where('id', $id)->first();
        return view('admin.students.edit', compact('row'));
   }

   public function update(UpdateStudent $request, $id)
   {

    $user =$this->studentModel->where('id', $id)->first();
    if($request->has('password') && $request->password != null){
        $password = Hash::make($request->password);
    }else{
        $password = $user->password;
    }

    $user->update([
        'first_name'        => $request->first_name,
        'second_name'       => $request->second_name,
        'third_name'        => $request->third_name,
        'last_name'         => $request->last_name,
        'email'             => $request->email
    ]);
    
    alert()->success('Updated successfully');
    return back();
   
   }

   public function destroy($id)
   {    
        $provider = $this->studentModel->find($id);
        $provider->delete();
        alert()->success('Deleted successfully');
        return back();
   }


}