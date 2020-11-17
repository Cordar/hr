<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function getMaxSalaryAttribute()
    {
        return $this->employees()->max('salary') ?? 0;
    }

    public function scopeHighSalaryEmployees(Builder $query)
    {
        return $query->whereHas('employees', function($q) {
            return $q->where('salary', '>', 50000);
        }, '>=', 2);
    }
}
