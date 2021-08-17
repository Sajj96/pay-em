<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.employee.index', compact('employees'));
    }

    public function add(Request $request)
    {
        if($request->method() == "GET") {
            $department = Department::all();
            return view('pages.employee.add', compact('department'));
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email',
            'phone'      => 'required|integer',
            'gender'     => 'required',
            'address'    => 'required|string',
            'city'       => 'required|string',
            'country'    => 'required',
            'marital_status' => 'required',
            'dob'        => 'required',
            'department' => 'required|integer',
            'job_title'  => 'required|string',
            'salary'     => 'required|integer'
        ]);
        
        try {
            $employee = new Employee;

        } catch (\Exception $e) {
            return redirect()->route('employee.add')->with('error', 'Problem in employee adding');
        }
    }
}
