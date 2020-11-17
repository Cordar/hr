<?php

namespace Tests\Feature;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    public function testExists()
    {
        $employee = Employee::factory()->create();

        $this->assertDatabaseHas('employees', ['id' => $employee->id]);
    }

    public function testHasNameAndSalary()
    {
        $employee = Employee::factory()->create();

        $this->assertDatabaseHas('employees', [
            'name' => $employee->name,
            'salary' => $employee->salary,
        ]);
    }
}
