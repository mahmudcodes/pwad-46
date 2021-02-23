@extends('layouts.master')
@section('content')
	<h1 class="bg-info p-3">{{ $title }}</h1>
	@include('pages.errors')
<form method="post" action="{{ route('products.store') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="email">Name: </label>
    <input type="text" class="form-control" name="name"/>
  </div>
  <div class="form-group">
    <label for="pwd">Price: </label>
    <input type="text" class="form-control" name="price"/>
  </div>
  <div class="form-group">
    <label for="pwd">SKU: </label>
    <input type="text" class="form-control" name="sku"/>
  </div>
  <div class="form-group">
    <label for="pwd">Quantity: </label>
    <input type="text" class="form-control" name="quantity"/>
  </div>
  <div class="form-group">
    <label for="pwd">In Stock:</label>
    <input type="text" class="form-control" name="in_stock"/>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection