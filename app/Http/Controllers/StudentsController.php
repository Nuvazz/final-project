<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    public function show($id)
    {
        $students = Student::find($id);
        return view ('students.show')->with('students', $students);
    }

    public function edit($id)
    {
        $students = Student::find($id);
        return view ('students.edit')->with('students', $students);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message',  'student Updated!');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Students deleted!');
    }
}
