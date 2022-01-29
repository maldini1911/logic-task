<?php
namespace App\Http\Repositories;
use App\Http\Interfaces\AdminInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Admins\StoreAdmin;
use App\Http\Requests\Admins\UpdateAdmin;
use App\Models\User;
use Validator;
use Hash;

class AdminRepository implements AdminInterface{


    private $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

   public function index()
   {    
        $users = User::get();
        return view('admin.admins.index', compact('users'));
   }

   public function create()
   {
        return view('admin.admins.create');
   }


   public function store(StoreAdmin $request)
   {

        $this->userModel->create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'mobile'    => $request->mobile,
        ]);

        alert()->success('Added successfully');
        return redirect()->route('admins.index');
   }


   public function edit($id)
   {
        $row = User::where('id', $id)->first();
        return view('admin.admins.edit', compact('row'));
   }

   public function update(UpdateAdmin $request, $id)
   {

    $user = $this->userModel->where('id', $id)->first();
    if($request->has('password') && $request->password != null){
        $password = Hash::make($request->password);
    }else{
        $password = $user->password;
    }

    $user->update([
        'name'      => $request->name,
        'username'  => $request->username,
        'email'     => $request->email,
        'password'  => $password,
        'mobile'    => $request->mobile,
    ]);

    alert()->success('Updated successfully');
    return back();
   
   }

   public function destroy($id)
   {    
        $user = User::find($id);
        $user->delete();
        alert()->success('Deleted successfully');
        return back();
   }


}