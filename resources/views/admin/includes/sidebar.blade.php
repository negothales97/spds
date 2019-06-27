  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>{{Auth::guard('admin')->user()->name}}</p>
              </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MENU PRINCIPAL</li>
              <li {{ (Request::is('admin/dashboard') ? 'class=active' : '') }}
                  {{ (Request::is('admin/dashboard') ? 'class=active' : '') }}>
                  <a href="#">
                      <i class="fa fa-tachometer"></i> <span>DASHBOARD</span>
                  </a>
              </li>
              <li {{ (Request::is('admin/ex-alunos') ? 'class=active' : '') }}
                  {{ (Request::is('admin/ex-alunos/*') ? 'class=active' : '') }}>
                  <a href="{{route('admin.student.show')}}">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> <span>EX-ALUNOS</span>
                  </a>
              </li>
              <li {{ (Request::is('admin/prestador') ? 'class=active' : '') }}
                  {{ (Request::is('admin/prestador/*') ? 'class=active' : '') }}>
                  <a href="{{route('admin.service_provider.show')}}">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> <span>PRESTADORES DE SERVIÇO</span>
                  </a>
              </li>
              <li {{ (Request::is('admin/empresa') ? 'class=active' : '') }}
                  {{ (Request::is('admin/empresa/*') ? 'class=active' : '') }}>
                  <a href="{{route('admin.company.show')}}">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> <span>EMPRESA</span>
                  </a>
              </li>
              <li {{ (Request::is('admin/cupom') ? 'class=active' : '') }}
                  {{ (Request::is('admin/cupom/*') ? 'class=active' : '') }}>
                  <a href="{{route('admin.coupon.show')}}">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> <span>CUPONS</span>
                  </a>
              </li>
              <li {{ (Request::is('admin/link') ? 'class=active' : '') }}
                  {{ (Request::is('admin/link/*') ? 'class=active' : '') }}>
                  <a href="{{route('admin.link.show')}}">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> <span>LINKS ÚTEIS</span>
                  </a>
              </li>
              <li {{ (Request::is('admin/ferramentas-marketing') ? 'class=active' : '') }}
                  {{ (Request::is('admin/ferramentas-marketing/*') ? 'class=active' : '') }}>
                  <a href="{{route('admin.tools-mkt.show')}}">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> <span>FERRAMENTAS DE MARKETING</span>
                  </a>
              </li>
              <li {{ (Request::is('admin/conteudo-marketing') ? 'class=active' : '') }}
                  {{ (Request::is('admin/conteudo-marketing/*') ? 'class=active' : '') }}>
                  <a href="{{route('admin.content-mkt.show')}}">
                  <i class="fa fa-user-circle" aria-hidden="true"></i> <span>CONTEÚDO DE MARKETING</span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>