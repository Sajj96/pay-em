<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PositionController extends Controller
{

    /**
     * Show the all positions.
     */
    public function index()
    {
        $positions = Position::all();
        $departments = Department::all();
        return view('pages.position.index', compact('positions', 'departments'));
    }

     /**
     * Save position.
     */
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'department' => 'required|integer'
        ]);

        if($validator->fails()) {
            return redirect('positions')->with('error', 'All fields are required');
        }

        try {
            $position = Position::whereName($request->name)->first();
            if(!$position) {
                $position = new Position;
            } else {
                return redirect('positions')->with('error', 'Position already exists');
            }
            $position->name = $request->name;
            $position->department_id = $request->department;
            if($position->save()) {
                return redirect('positions')->with('success', 'Position created successfully');
            }
        } catch (\Exception $e) {
            return redirect('positions')->with('error', 'Problem in Position creation');
        }
    }

     /**
     * Show and Update position.
     */
    public function edit($id=null, Request $request)
    {
        if (empty($id) && $request->has('id')){
            $id = $request->id;
        }

        $position = Position::find($id);
        if($request->method() == "GET") {
            return json_encode([
                'name' => $position->name,
                'dept_id' => $position->department_id,
                'id'  => $position->id
            ]);
        }

        try {
            $position->name = $request->name;
            $position->department_id = $request->department;
            if($position->save()) {
                return redirect('positions')->with('success', 'Position updated successfully');
            }
        } catch (\Exception $e) {
            return redirect('positions')->with('error', 'Problem in Position updating');
        }
    }

     /**
     * Delete position.
     */
    public function delete($id)
    {
        $position = Position::find($id);
        
        try {
            $position->delete();
            return redirect('positions')->with('success', 'Position deleted successfully');
        } catch (\Exception $e) {
            return redirect('positions')->with('error', 'Problem in Position deleting');
        }
    }
}
