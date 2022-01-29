<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AuthInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    private $authInterface;
    
    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function login()
    {
        return $this->authInterface->login();
    }

    public function loginAuth(Request $request)
    {
        return $this->authInterface->loginAuth($request);
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }
}