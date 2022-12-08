<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index()
    {
        $employees = Employee::all();

        return view('dashboard', compact('employees'));
    }
}
