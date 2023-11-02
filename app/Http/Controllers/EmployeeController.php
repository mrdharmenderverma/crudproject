<?php

namespace App\Http\Controllers;

// use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
   public function index(){
    // echo "this is just for testing";
    return view('employee.list');
   }

   public function create(){
    return view('employee.create');
   }

   public function store(Request $request) {
    $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required',
        'image' => 'required'
    ]);
    if($validator->passes()){

        //save data here
    }
    else{
        //return with error
        return redirect()->route('employees.create')->withErrors($validator);
    }
   }
}
