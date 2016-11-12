<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use App\Student;

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
      /*Validate the form inputs*/
      $this->validate($request, [
        'inputFirstname' => 'bail|required|max:255',
        'inputSurname' => 'bail|required|max:255',
        'inputEmail' => 'bail|required|unique:students,email|email'
      ]);
      
      /*Create the student record from the text fields*/
      $student = new Student;
      $student->firstname = $request->inputFirstname;
      $student->surname = $request->inputSurname;
      $student->email = $request->inputEmail;
      $student->save();
      
      /*Create the relationship between the student and their school(s)*/
      $schoolList = array();
      $input = $request->all();
      foreach ($input as $name => $value) {
        if(strchr($name,"schoolcheckbox",true)) {
          array_push($schoolList, $value);
        }
      }
      $student->schools()->attach($schoolList);

      return redirect('/');
      
    }
}