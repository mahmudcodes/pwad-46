@extends('layouts.master')
@section('content')
<h1 class="bg-success p-3">Create Student</h1><br>
@include('pages.errors')
<form method="post" action="{{ route('products.store') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="email">First Name:</label>
    <input type="text" class="form-control" name="first_name"/>
  </div>
  <div class="form-group">
    <label for="pwd">Last Name:</label>
    <input type="text" class="form-control" name="last_name"/>
  </div>
  <div class="form-group">
    <label for="pwd">Gender:</label>
    <input type="text" class="form-control" name="gender"/>
  </div>
  <div class="form-group">
    <label for="pwd">Qualifications:</label>
    <input type="text" class="form-control" name="qualifications"/>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php //@stop or @endsection ?>
@endsection