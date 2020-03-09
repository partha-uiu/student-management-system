<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.index',compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
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
