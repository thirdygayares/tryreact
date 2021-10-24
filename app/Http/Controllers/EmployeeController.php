<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::all();
        return view('pages.index' , compact('employee'));


    }

    //to add employee
    public function addemployee(){
        return view('pages.create');
    }

    //to insert the data into database
    public function store(Request $request){
        $employee = new Employee;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products', $filename);
            $employee->image = $filename;
       }
       
       
        $employee->category = $request->input('category');
        $employee->name = $request->input('name');
        $employee->price = $request->input('price');
        $employee->description = $request->input('description');
        $employee->size = $request->input('size');
        $employee->color = $request->input('color');
        $employee-> save();

        return redirect('/admin')->with('status', 'Products Added Sucessfuly');

    }

    public function edit($id){
        $employee = Employee::find($id);
        return view ('pages.edit', compact('employee'));
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);

        $employee->category = $request->input('category');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products', $filename);
            $employee->image = $filename;
       }
     
        $employee->name = $request->input('name');
        $employee->price = $request->input('price');
        $employee->description = $request->input('description');
        $employee->size = $request->input('size');
        $employee->color = $request->input('color');
        $employee->status = $request->input('status') == true ? "1" : "0";

        $employee->update();

        return redirect('/admin')->with('status', 'Products Updated Succesfully');
    }

    public function delete(Request $request, $id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/admin')->with('status', 'Products Data Deleted Succesfully');
    }
}
