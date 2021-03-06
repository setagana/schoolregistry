@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-xs-12 col-sm-8">
    <div class="page-header">
      <h1>Add a student</h1>
    </div>
  </div>
  <div class="col-sm-2"></div>
</div>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-xs-12 col-sm-8">
      <!-- Display Validation Errors -->
      @include('common.errors')
  </div>
  <div class="col-sm-2"></div>
</div>

<form class="form-horizontal" action="{{ url('student') }}" method = "POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputFirstname" class="control-label col-xs-2">First name</label>
    <div class="col-xs-10 col-sm-8">
      <input type="text" class="form-control" name="inputFirstname" id="inputFirstname" placeholder="First name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputSurname" class="control-label col-xs-2">Surname</label>
    <div class="col-xs-10 col-sm-8">
      <input type="text" class="form-control" name="inputSurname" id="inputSurname" placeholder="Surname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="control-label col-xs-2">Email</label>
    <div class="col-xs-10 col-sm-8">
      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-xs-12 col-sm-8">
        <h3>School enrollment</h3>  
      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="row">
      <div class="col-xs-2"></div>
      <div class="col-xs-10 col-sm-8">
      @foreach ($schools as $school)
        <div class="input-group schoolcheckbox">
            <span class="input-group-addon">
              <input type="checkbox" id="{{ $school->id }}" name="{{ $school->id }}schoolcheckbox" aria-label="Select {{ $school->schoolname }}" value="{{ $school->id }}">
            </span>
            <input type="text" class="form-control" value="{{ $school->schoolname }}" disabled>
        </div>
      @endforeach
      </div>
    </div>
    <!-- <label for="selectSchools" class="control-label col-xs-2">Email</label>
    <div class="col-xs-10 col-sm-8">
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div> -->
  </div>
  <div class="form-group">
    <div class="col-xs-12 col-sm-10">
      <div class="pull-right">
        <button type="submit" class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"></i>&nbsp;Add student
        </button>
      </div>
    </div>
  </div>
</form>

@endsection