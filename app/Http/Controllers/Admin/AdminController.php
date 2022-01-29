<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Interfaces\AdminInterface;
use App\Http\Requests\Admins\StoreAdmin;
use App\Http\Requests\Admins\UpdateAdmin;

class AdminController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    private $adminInterface;
    
    public function __construct(AdminInterface $adminInterface)
    {   
        $this->adminInterface = $adminInterface;
    }

    public function index()
    {
        return $this->adminInterface->index();
    }

    public function create()
    {
        return $this->adminInterface->create();
    }

    public function store(StoreAdmin $request)
    {
        return $this->adminInterface->store($request);
    }

    public function edit($id)
    {
        return $this->adminInterface->edit($id);
    }

    public function update(UpdateAdmin $request, $id)
    {
        return $this->adminInterface->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->adminInterface->destroy($id);
    }
}