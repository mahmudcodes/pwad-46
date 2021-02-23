@extends('layouts.master')
@section('title')
	Product List
@endsection
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
	<h1 class="bg-info p-3">{{ $title }}</h1>
	<div>
    <a style="margin: 10px;" href="{{URL::to('/products/create')}}" class="btn btn-primary">Create Product</a>
    </div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Price</th>
				<th scope="col">SKU</th>
				<th scope="col">Quantity</th>
				<th scope="col">In Stock</th>
				<th scope="col">Total</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<th scope="row">{{ $loop->iteration }}</th>
				<td>{{ $product->name }}</td>
				<td>{{ $product->price }}</td>
				<td>{{ $product->sku }}</td>
				<td>{{ $product->quantity }}</td>
				<td>{{ $product->in_stock }}</td>
				<td>{{ $product->quantity - $product->in_stock }}</td>
				
				<td>
					<a href="/products/{{ $product->id }}/edit" class="btn btn-primary">Edit</a> |
	                <form action="/products/{{ $product->id }}" method="post">
	                	<input type="hidden" name="_method" value="DELETE">
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
@endsection