<?php
namespace App\Http\Interfaces;
use Illuminate\Http\Request;
use App\Http\Requests\Admins\StoreAdmin;
use App\Http\Requests\Admins\UpdateAdmin;

interface AdminInterface{
    
   public function index();
   public function create();
   public function store(StoreAdmin $request);
   public function edit($id);
   public function update(UpdateAdmin $request, $id);
   public function destroy($id);
}