@extends('layouts.app')

@section('content')
      
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            @foreach ($schools as $school)
              @if ($school->id == $selectedSchool->id)
                <li class="active"><a href="{{ action('RegistryController@show', $school->id) }}">{{ $school->schoolname }}<span class="sr-only">(current)</span></a></li>
              @else
                <li><a href="{{ action('RegistryController@show', $school->id) }}">{{ $school->schoolname }}</a></li>
              @endif
            @endforeach
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">{{ $selectedSchool->schoolname }}</h1>
          <h2 class="sub-header">Students</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First name</th>
                  <th>Surname</th>
                  <th>Email address</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($selectedSchool->students as $student)
                  <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->firstname }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->email }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      
@endsection
