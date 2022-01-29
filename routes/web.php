<?php
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\StudentsGradesController;
use App\Http\Controllers\Admin\ImportExcelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\AuthWebsiteController;
//*=========================== Routes Admin Dashboard ========================*/
//----> [Start Auth Login]
Route::get('/', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/auth/login', [AuthController::class, 'loginAuth'])->name('admin.auth.login');
//----> [End Auth Login]

//----> Routes After Auth
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
    /** [Dashboard] */
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    /** [Admins] */
    Route::resource('admins', AdminController::class);

    /** [Students] */
    Route::resource('students', StudentsController::class);

    /** [Students Grades] */
    Route::resource('{student_id}/student-grades', StudentsGradesController::class);
    Route::get('all/student/grades', [StudentsGradesController::class, 'showStudentsGrade'])->name('all.students.grade');
    Route::any('studnet/excel', [ImportExcelController::class, 'importStudentGrade'])->name('students.excel');

     /** [Logout] */
    Route::any('logout', [AuthController::class, 'logout'])->name('admin.logout');
});

