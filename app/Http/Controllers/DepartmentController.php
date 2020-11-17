<?php

namespace App\Http\Controllers;

use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments', [
            'departments' => Department::all(),
        ]);
    }

    public function store()
    {
        $department = Department::create([
            'name' => request('name')
        ]);

        return response($department, 200);
    }
}
