<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees', [
            'employees' => Employee::all(),
            'departments' => Department::all(),
        ]);
    }

    public function store()
    {
        $employee = Employee::create([
            'name' => request('name'),
            'salary' => request('salary'),
            'department_id' => request('department_id')
        ]);

        return response($employee, 200);
    }
}
