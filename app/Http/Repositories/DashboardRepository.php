<?php
namespace App\Http\Repositories;
use App\Models\User;
use App\Models\StudentGrade;
use App\Models\Student;
use App\Http\Interfaces\DashboardInterface;

class DashboardRepository implements DashboardInterface{

    public function dashboard()
    {   

        $adminsCount = User::count();
        $studentsCount = Student::count();
        $gradesCount = StudentGrade::count();
        return view('admin.dashboard', compact('adminsCount', 'studentsCount', 'gradesCount'));
    }

}