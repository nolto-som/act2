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

    // public function createNewStd(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|max:3',
    //         'age' => 'required|numeric',
    //         'gender' => 'required|max:6',
    //         'address' => 'required'
    //     ]);

    //     $addNew = new Students();
    //     $addNew->name = $request->name;
    //     $addNew->age = $request->age;
    //     $addNew->gender = $request->gender;
    //     $addNew->address = $request->address;
    //     $addNew->save();

    //     return back()->with('success', 'Student added successfully!');
    // }
}