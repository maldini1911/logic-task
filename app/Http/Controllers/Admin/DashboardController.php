<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\DashboardInterface;

class DashboardController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    private $dashboardInterface;
    
    public function __construct(DashboardInterface $dashboardInterface)
    {   
        $this->dashboardInterface = $dashboardInterface;
    }

    public function dashboard()
    {
        return $this->dashboardInterface->dashboard();
    }
}