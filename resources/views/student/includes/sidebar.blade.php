  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
          <?php 
            $auth = auth()->guard('student')->user();
            $name = explode(' ', $auth->name);
           ?>
              <div class="pull-left image">
                  <img src="{{asset('images/thumbnail')}}/{{$auth->thumbnail}}" class="img-user" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>{{$name[0]}}</p>
                  <span><small>Ex-Aluno</small></span>
              </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MENU PRINCIPAL</li>
              <li {{ (Request::is('ex-aluno/*') ? 'class=active' : '') }}>
                  <a href="{{route('student.show')}}">
                      <i class="fa fa-user-circle"></i> <span>MEU CURRÍCULO</span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>