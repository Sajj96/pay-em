<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\State;
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
            $countries = Country::all();
            $states = State::all();
            return view('pages.employee.add', compact('department', 'countries', 'states'));
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
        
        if($validator->fails()) {
            return redirect('employees')->with('error', 'valid information are required');
        }

        try {
            $employee = Employee::whereEmail($request->email)->first();
            if(!$employee) {
                $employee = new Employee;
            }
            $employee->FirstName = $request->first_name;
            $employee->MiddleName = $request->middle_name;
            $employee->LastName = $request->last_name;
            $employee->Phone = $request->phone;
            $employee->Gender = $request->gender;
            $employee->Address = $request->address;
            $employee->City = $request->city;
            $employee->Nationality = $request->country;
            $employee->MaritalStatus = $request->marital_status;
            $employee->BirthDate = $request->dob;
            $employee->Department = $request->dept;
            $employee->JobTitle = $request->job_title;
            $employee->BasicSalary = $request->salary;
            $employee->PayFrequency = $request->payfrequency;
            $employee->PayMethod = $request->paymethod;
            $employee->EmploymentType = $request->employment_type;
            $employee->JoinDate = $request->joindate;
            $employee->EndDate = $request->enddate;
            if($employee->save()) {
                return redirect('employees')->with('success', 'Employee added successfully');
            } else {
                return redirect('employees')->with('error', 'Problem in employee adding');
            }

        } catch (\Exception $e) {
            return redirect()->route('employee.add')->with('error', 'Problem in employee adding');
        }
    }
}
