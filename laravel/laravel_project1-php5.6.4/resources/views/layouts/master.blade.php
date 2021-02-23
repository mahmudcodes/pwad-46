<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ isset($title) ? $title : 'Page Title' }}</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

@include('layouts.header')


<div class="container" style="margin-top:30px">
  <div class="row">
    @include('layouts.leftbar')
    <div class="col-sm-8">
      @yield('content')
      
    </div>
  </div>
</div>

@include('layouts.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
