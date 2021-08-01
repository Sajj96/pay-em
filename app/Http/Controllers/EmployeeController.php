<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.employee.index', compact('employees'));
    }

    public function add()
    {
        return view('pages.employee.add');
    }
}
