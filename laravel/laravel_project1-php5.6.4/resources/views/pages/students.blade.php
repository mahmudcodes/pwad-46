@extends('layouts.master')
@section('content')

<div>
	
    
	@if(session()->get('success'))
	    <div class="alert alert-success">
	      <strong>{{ session()->get('success') }}</strong>  
	    </div>
	  @endif
	  @if(session()->get('danger'))
	    <div class="alert alert-danger">
	      <strong>{{ session()->get('danger') }}</strong>  
	    </div>
	  @endif
	  @if(session()->get('update'))
	    <div class="alert alert-warning">
	      <strong>{{ session()->get('update') }} </strong> 
	    </div>
	  @endif
	<h1 class="bg-info p-3">Student List</h1>
	<div>
    <a style="margin: 10px;" href="{{URL::to('/create')}}" class="btn btn-primary">New Student</a>
    </div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Gender</th>
				<th scope="col">Qualifications</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
			<tr>
				<th scope="row">{{ $loop->iteration }}</th>
				<td>{{ $student->first_name }}</td>
				<td>{{ $student->last_name }}</td>
				<td>{{ $student->gender }}</td>
				<td>{{ $student->qualifications }}</td>
				
				<td>
					<a href="/students/edit/{{ $student->id }}" class="btn btn-primary">Edit</a> |
	                <form action="{{ action('StudentsController@destroy', $student->id) }}" method="get">
	                  <input type="hidden" name="_method" value="PUT">
	                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                  <button class="btn btn-danger" type="submit">Delete</button>
	                </form>
            	</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<script>
	$(document).ready(function(){
		$(".alert-danger").fadeOut(2000);
		$(".alert-success").fadeOut(2000);
		$(".alert-warning").fadeOut(2000);
	});
</script>
<?php //@stop or @endsection ?>
@endsection