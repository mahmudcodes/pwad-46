<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="{{URL::to('/')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/service')}}">Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/students')}}">Students</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
      </li> 
    </ul>
  </div>  
</nav>