<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function myWelcomeView()
    {
        $students = Students::all();
        $users = User::all();
        return view('welcome', compact('students', 'users'));
    }

    public function createNewStd(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'age' => 'required|numeric',
            'gender' => 'required|max:6',
            'address' => 'required'
        ]);

        $addNew = new Students();
        $addNew->name = $request->name;
        $addNew->age = $request->age;
        $addNew->gender = $request->gender;
        $addNew->address = $request->address;
        $addNew->save();

        return back()->with('success', 'Student added successfully!');
    }

    public function editStudent($id)
    {
        $student = Students::findOrFail($id);
        return view('edit-student', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'age' => 'required|numeric',
            'gender' => 'required|max:6',
            'address' => 'required'
        ]);

        $student = Students::findOrFail($id);
        $student->name = $request->name;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->save();

        return back()->with('success', 'Student updated successfully!');
    }

    public function deleteStudent($id)
    {
        $student = Students::findOrFail($id);
        $student->delete();

        return back()->with('success', 'Student deleted successfully!');
    }
}