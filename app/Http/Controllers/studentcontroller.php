<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;

class StudentController extends Controller
{
    /**
     * Show the new student form.
     */
    public function create()
    {      
      $schools = School::all();
      
      return view('newstudent', compact('schools'));
    }
  
    /**
    * Store a new student.
    */
    public function store(Request $request)
    {
/*      $this->validate($request, [
        'inputName' => 'bail|required|unique:schools,schoolname|max:255'
      ]);
      
      $school = new School;
      $school->schoolname = $request->inputName;
      $school->save();*/

      return redirect('/');
      
    }
}