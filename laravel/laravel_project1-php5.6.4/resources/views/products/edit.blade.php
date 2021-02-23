@extends('layouts.master')
@section('content')
<h1 class="bg-warning p-3">Update Student</h1><br>
@include('pages.errors')
<form method="post" action="{{ route('products.update', $product->id) }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="email">Name: </label>
    <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
  </div>
  <div class="form-group">
    <label for="pwd">Price: </label>
    <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
  </div>
  <div class="form-group">
    <label for="pwd">SKU: </label>
    <input type="text" class="form-control" name="sku" value="{{ $product->sku }}"/>
  </div>
  <div class="form-group">
    <label for="pwd">Quantity: </label>
    <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}"/>
  </div>
  <div class="form-group">
    <label for="pwd">In Stock:</label>
    <input type="text" class="form-control" name="in_stock" value="{{ $product->in_stock }}"/>
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
</form>
<?php //@stop or @endsection ?>
@endsection