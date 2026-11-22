<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
 public function index()
{
    $students = Student::all();

    return view('students.index', compact('students'));
}

    public function show($id)
    {
        return 'Student ID: ' . $id;
    }

   public function create()
{
    return view('students.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'student_number' => 'required|unique:students',
        'name' => 'required',
        'email' => 'required|email',
    ]);

    Student::create($validated);

   return redirect('/students')->with('success', 'Student Created Successfully');
}

   public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);

    $validated = $request->validate([
        'student_number' => 'required|unique:students,student_number,' . $id,
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $student->update($validated);

    return redirect('/students')->with('success', 'Student Updated Successfully');
}

    public function destroy($id)
{
    $student = Student::findOrFail($id);

    $student->delete();

    return redirect('/students')
        ->with('success', 'Student Deleted Successfully');
}

public function edit($id)
{
    $student = Student::findOrFail($id);

    return view('students.edit', compact('student'));
}


}