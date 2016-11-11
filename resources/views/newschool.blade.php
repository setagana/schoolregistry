@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-xs-12 col-sm-8">
    <div class="page-header">
      <h1>Add a school</h1>
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

<form class="form-horizontal" action="{{ url('school') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputName" class="control-label col-xs-2">School name</label>
    <div class="col-xs-10 col-sm-8">
      <input type="text" class="form-control" name="inputName" id="inputName" placeholder="School name">
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-12 col-sm-10">
      <div class="pull-right">
        <button type="submit" class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"></i>&nbsp;Add school
        </button>
      </div>
    </div>
  </div>
</form>

@endsection