<?php
namespace App\Http\Repositories;
use App\Http\Interfaces\AuthInterface;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthRepository implements AuthInterface{


    private $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }


    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginAuth($request)
    {       
        $credentials = request(['email', 'password']);

        /** Auth Admin */
        if (Auth::guard('admin')->attempt($credentials))
        {
            return redirect()->route('admin.dashboard');
        }else{
            alert()->error('The email or password is incorrect');
            return back();
        }
    }


    public function logout(){
      auth()->guard('admin')->logout();
      return redirect()->route('admin.login');
    }
   
}