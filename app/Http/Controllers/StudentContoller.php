<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentContoller extends Controller
{
    public function list()
    {
        
        $students = StudentModel::all();
        // echo "<pre>";
        // print_r($students->toArray());
        // die;

        $data = compact('students');
        return view('list')->with($data);
    }

    public function addView()
    {
        return view('add');
    }
    public function add(Request $request)
    {
        $students = new StudentModel;
        $students->studentFullName = $request['name'];
        $students->studentPhoneNumber = $request['PhoneNumber'];
        $students->save();
        return redirect('/list');
    }

    public function editView($id)
    {
        $student = StudentModel::find($id);
        $data = compact("student");
        return view('edit')->with($data);
    }
    public function edit($id, Request $request2)
    {
        $student = StudentModel::find($id);
        $student->studentFullName = $request2['name'];
        $student->studentPhoneNumber = $request2['PhoneNumber'];
        $student->save();
        return redirect('/list');
    }

    public function delete($id)
    {
        $student = StudentModel::find($id)->delete($id);
        return redirect('/list');
    }
}