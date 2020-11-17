<?php

namespace App\Http\Controllers;

use App\Models\Department;

class Report1Controller extends Controller
{
    public function index()
    {
        return view('report1', [
            'departments' => Department::all()->append('maxSalary'),
        ]);
    }
}
