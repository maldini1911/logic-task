<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Interfaces\StudentInterface;
use App\Http\Requests\Students\StoreStudent;
use App\Http\Requests\Students\UpdateStudent;

class StudentsController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    private $studentInterface;
    
    public function __construct(StudentInterface $studentInterface)
    {   
        $this->studentInterface = $studentInterface;
    }

    public function index()
    {
        return $this->studentInterface->index();
    }

    public function create()
    {
        return $this->studentInterface->create();
    }

    public function store(StoreStudent $request)
    {
        return $this->studentInterface->store($request);
    }

    public function edit($id)
    {
        return $this->studentInterface->edit($id);
    }

    public function update(UpdateStudent $request, $id)
    {
        return $this->studentInterface->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->studentInterface->destroy($id);
    }
}