<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = "Welcome to the Student management system";
        return view('admin.students.index', compact('data'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
       
    }

    public function show()
    {
        
    }


    public function edit()
    {

    }

    public function update(Request $request, Student $student)
    {
       
    }


    public function destroy(Student $student)
    {
       
    }
}
