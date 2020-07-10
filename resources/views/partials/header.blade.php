<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SCHOOL</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::route()->getName()=='home'?'active':''}}">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{strpos(Request::route()->getName(),'students') !== false ? 'active' : ''}}">
        <a class="nav-link" href="{{route('students.index')}}">Students</a>
      </li>
    </ul>
  </div>
</nav>
