<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;

class RegistryController extends Controller
{
    /**
     * Show the school registry.
     */
    public function show($id = null)
    {      
      $schools = School::all();
      
      if(!isset($id)) {
        $id = School::first()->id;
      }
      
      $selectedSchool = School::find($id);
    
      return view('students', ['selectedSchool' => $selectedSchool], compact('schools'));
    }
  

}