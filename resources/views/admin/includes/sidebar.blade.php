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
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-circle-o"></i>
                      <span>CADASTROS</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu" style="display: none;">
                      <li><a href="{{route('admin.student.show')}}"><i class="fa fa-circle-o"></i>EX-ALUNOS</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i>CATEGORIA PRODUTO</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i>PRODUTO</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i>FORNECEDOR</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i>UNIDADE DE MEDIDA</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i>COND. PAGAMENTO</a></li>
                  </ul>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>