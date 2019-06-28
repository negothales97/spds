  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <?php
               $auth = auth()->guard('furnisher')->user(); 
                $name = explode(' ', $auth->name);
              ?>
              <div class="pull-left image">
                  <img src="{{asset('images/logo')}}/{{$auth->logo}}" class="img-user" alt="User Image">
              </div>
              <div class="pull-left info">
              <p>{{$name[0]}}</p>
                  <span><small>Prestador de Serviço</small></span>
              </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MENU PRINCIPAL</li>
              <li {{ (Request::is('prestador-servico/*') ? 'class=active' : '') }}>
                  <a href="{{route('furnisher.show')}}">
                      <i class="fa fa-user-circle"></i> <span>MEUS DADOS</span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>