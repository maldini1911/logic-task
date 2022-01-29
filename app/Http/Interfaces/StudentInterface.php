<?php
namespace App\Http\Interfaces;
use Illuminate\Http\Request;
use App\Http\Requests\Students\StoreStudent;
use App\Http\Requests\Students\UpdateStudent;

interface StudentInterface{
    
   public function index();
   public function create();
   public function store(StoreStudent $request);
   public function edit($id);
   public function update(UpdateStudent $request, $id);
   public function destroy($id);
}