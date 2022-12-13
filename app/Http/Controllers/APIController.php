<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Logs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class APIController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkIn($id)
    {

        Logs::create([
            'employee_id' => $id,
            'action' => 1,
            'time' => now()
        ]);

        return [
            "status" => true,
        ];
    }

    public function checkOut($id)
    {
        Logs::create([
            'employee_id' => $id,
            'action' => 2,
            'time' => now()
        ]);

        return [
            "status" => true,
        ];
    }

    public function account($id)
    {
        $employee = Employee::findOrFail($id);

        return $employee;
    }

    public function coordinates()
    {
        //25.25645449037584, 55.4089075631927

        return [
            "latitude" =>  "25.046101259988102",
            "longitude" => "55.20177894232937",
        ];

        return [
            "latitude" =>  "25.25645449037584",
            "longitude" => "55.4089075631927",
        ];
    }



}
