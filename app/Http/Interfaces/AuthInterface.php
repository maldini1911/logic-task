<?php
namespace App\Http\Interfaces;

interface AuthInterface{
    public function login();
    public function loginAuth($request);
    public function logout();
}