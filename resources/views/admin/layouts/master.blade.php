<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

<title>App</title>
</head>
<body>

{{-- <div class="overlay"></div> --}}

{{-- TOPNAV --}}
<nav id="topnav" style="display: flex; flex-direction:row; justify-content: space-between; align-items:center;" >



  <div style="display: flex; flex-direction:row;">
    <div class="hide-for-desktop" style="margin-right:10px;">
        <a id="btnHamburger" class="cursor-pointer" style="color:white;" >Menu</a>
    </div>
    <div>
      <a href="" class="b">PORTFOLIO</a>
    </div>
  </div>

  <div>
  <a class="btn btn-primary btn-sm" href="{{ route('logout') }}"
      onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"
      style="color: #fff;"
  >
  Logout
  </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </div>


</nav>


{{-- WRAPPER --}}
<div id="wrapper">

{{-- SIDEBAR --}}
<div class="sidebar navbar-nav can-fade">


<section >MENU</section>

<ul class="navbar-nav">
  <li class="nav-item {{ (Request::is('admin/dashboard', 'admin/dashboard/*') ? 'active' : '') }}">
    <a href="/admin/dashboard" class="nav-link">
        <i class="bi bi-bell mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
        Dashboard
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/home', 'admin/home/*') ? 'active' : '') }}">
    <a href="/admin/home" class="nav-link">
      <i class="bi bi-house-door mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
      Home
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/about', 'admin/about/*') ? 'active' : '') }}">
    <a href="/admin/about" class="nav-link">
      <i class="bi bi-person mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
      About
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/project', 'admin/project/*') ? 'active' : '') }}">
    <a href="/admin/project" class="nav-link">
      <i class="bi bi-file-earmark-code mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
      Project
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/blog', 'admin/blog/*') ? 'active' : '') }}">
    <a href="/admin/blog" class="nav-link">
      <i class="bi bi-pencil-square mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
      Blog
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/social', 'admin/social/*') ? 'active' : '') }}">
    <a href="/admin/social" class="nav-link">
      <i class="bi bi-link-45deg mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
      Social
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/ama', 'admin/ama/*') ? 'active' : '') }}">
    <a href="/admin/ama" class="nav-link">
        <i class="bi bi-chat-dots mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
        AMA
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/bookmarks', 'admin/bookmarks/*') ? 'active' : '') }}">
    <a href="/admin/bookmark" class="nav-link">
        <i class="bi bi-bookmark mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
        Bookmarks
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/tools', 'admin/tools/*') ? 'active' : '') }}">
    <a href="/admin/tools" class="nav-link">
        <i class="bi bi-laptop mr-2" style="margin-bottom:-15px;margin-right:3px;"></i>
        Tools
    </a>
  </li>
  <section >STUDY</section>
  <li class="nav-item {{ (Request::is('admin/masterdetail', 'admin/masterdetail/*') ? 'active' : '') }}">
    <a href="/admin/masterdetail" class="nav-link">
      <i class="bi bi-cpu-fill mr-2"></i>
      MasterDetail
    </a>
  </li>
  <li class="nav-item {{ (Request::is('admin/react', 'admin/react/*') ? 'active' : '') }}">
    <a href="/admin/react" class="nav-link">
      <i class="bi bi-cpu-fill mr-2"></i>
      React
    </a>
  </li>

  <li class="nav-item {{ (Request::is('admin/tasks', 'admin/tasks/*') ? 'active' : '') }}">
    <a href="/admin/tasks" class="nav-link">
      <i class="bi bi-cpu-fill mr-2"></i>
      Tasks
    </a>
  </li>

</ul>

</div>

<div id="content-wrapper">

@yield('content')

</div>
</div>


<script src="{{ asset('/js/admin.js') }}" ></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

