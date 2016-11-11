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
      <input type="text" class="form-control" id="inputFirstname" placeholder="First name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputSurname" class="control-label col-xs-2">Surname</label>
    <div class="col-xs-10 col-sm-8">
      <input type="text" class="form-control" id="inputSurname" placeholder="Surname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="control-label col-xs-2">Email</label>
    <div class="col-xs-10 col-sm-8">
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
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
        <div class="input-group schoolcheckbox">
          <span class="input-group-addon">
            <input type="checkbox" id="checkboxschoolid1" name="schoolname1" aria-label="Select schoolname1" value="schoolid1">
          </span>
          <input type="text" class="form-control" value="schoolname1" disabled>
        </div>
        <div class="input-group schoolcheckbox">
          <span class="input-group-addon">
            <input type="checkbox" id="checkboxschoolid2" name="schoolname2" aria-label="Select schoolname2" value="schoolid2">
          </span>
          <input type="text" class="form-control" value="schoolname2" disabled>
        </div>
        <div class="input-group schoolcheckbox">
          <span class="input-group-addon">
            <input type="checkbox" id="checkboxschoolid2" name="schoolname3" aria-label="Select schoolname3" value="schoolid3">
          </span>
          <input type="text" class="form-control" value="schoolname3" disabled>
        </div>
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