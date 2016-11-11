<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;

class SchoolController extends Controller
{
    /**
     * Show the new school form.
     */
    public function create()
    {
      return view('newschool');
    }
  
    /**
    * Store a new school.
    */
    public function store(Request $request)
    {
      $this->validate($request, [
        'inputName' => 'bail|required|unique:schools,schoolname|max:255'
      ]);
      
      $school = new School;
      $school->schoolname = $request->inputName;
      $school->save();

      return redirect('/');
      
    }
}