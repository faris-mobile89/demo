<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

class EmployeeController extends BaseController
{
    public function show($id)
    {
        $employee = Employee::findOrFail($id);

        $logs = Logs::where(['employee_id' => $id])->orderBy('created_at', 'DESC')->get();

        return view('users-profile', compact(['employee', 'logs']));
    }

    public function update(Request $request, $id)
    {
        $checked = $request->home;

        Employee::where('id', $id)->update([
            'work_location' => $checked === 'on' ? 1 : 2,
        ]);

        $employee = Employee::findOrFail($id);

        $logs = Logs::where(['employee_id' => $id])->orderBy('created_at', 'DESC')->get();

        return view('users-profile', compact(['employee', 'logs']));
    }
}
