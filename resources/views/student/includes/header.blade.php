<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('student.show')}}" class="logo">
      <span class="logo-lg"><b>OCTOHUB</b></span>
      <span class="logo-mini"><b>OCT</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">            
          <!-- Control Sidebar Toggle Button -->
          <li>
              <a href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out"></i>
              </a>

              <form id="logout-form" action="{{ url('/student/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
        </ul>
      </div>
    </nav>
  </header>