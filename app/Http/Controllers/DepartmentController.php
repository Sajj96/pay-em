<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('pages.department.index', compact('departments'));
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if($validator->fails()) {
            return redirect('departments')->with('error', 'Department Name is required');
        }

        try {
            $department = Department::whereName($request->name)->orWhere('code',$request->code)->first();
            if(!$department) {
                $department = new Department;
            } else {
                return redirect('departments')->with('error', 'Department already exists');
            }
            $department->name = $request->name;
            $department->code = $request->code;
            if($department->save()) {
                return redirect('departments')->with('success', 'Department created successfully');
            }
        } catch (\Exception $e) {
            return redirect('departments')->with('error', 'Problem in Department creation');
        }
    }
}
