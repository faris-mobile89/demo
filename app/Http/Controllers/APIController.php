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
        return [
            "latitude" =>  "23.00376000",
            "longitude" => "55.28542000",
        ];
    }



}
