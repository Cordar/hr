<?php

namespace Tests\Feature;

use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DepartmentTest extends TestCase
{
    use RefreshDatabase;

    public function testExists()
    {
        $department = Department::factory()->create();

        $this->assertDatabaseHas('departments', ['id' => $department->id]);
    }

    public function testHasName()
    {
        $department = Department::factory()->create();

        $this->assertDatabaseHas('departments', ['name' => $department->name]);
    }

    public function testHasManyEmployees()
    {
        $department = Department::factory()
            ->hasEmployees(5)
            ->create();

        $this->assertInstanceOf(Collection::class, $department->employees);
    }
}
