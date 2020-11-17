<?php

namespace App\Http\Controllers;

use App\Models\Department;

class Report2Controller extends Controller
{
    public function index()
    {
        return view('report2', [
            'departments' => Department::highSalaryEmployees()->get(),
        ]);
    }
}
