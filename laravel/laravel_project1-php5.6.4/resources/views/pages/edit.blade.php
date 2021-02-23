@extends('layouts.master')
@section('content')
<h1 class="bg-warning p-3">Update Student</h1><br>
@include('pages.errors')
<form method="post" action="{{ action('StudentsController@update', $student->id) }}">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="email">First Name:</label>
    <input type="text" class="form-control" name="first_name" value=" {{ $student->first_name }}" />
  </div>
  <div class="form-group">
    <label for="pwd">Last Name:</label>
    <input type="text" class="form-control" name="last_name" value="{{ $student->last_name }}" />
  </div>
  <div class="form-group">
    <label for="pwd">Gender:</label>
    <input type="text" class="form-control" name="gender" value="{{ $student->gender }}" />
  </div>
  <div class="form-group">
    <label for="pwd">Qualifications:</label>
    <input type="text" class="form-control" name="qualifications" value="{{ $student->qualifications }}" />
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
</form>
<?php //@stop or @endsection ?>
@endsection