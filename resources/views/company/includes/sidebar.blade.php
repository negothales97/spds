  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MENU PRINCIPAL</li>
              <li class="treeview" {{ (Request::is('empresa/pesquisar') ? 'class=active' : '') }}
                  {{ (Request::is('empresa/pesquisar/*') ? 'class=active' : '') }}>
                  <a href="#">
                      <i class="fa fa-circle-o"></i>
                      <span>PESQUISAR</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu" style="display: none;">
                      <li><a href="{{route('company.search.furnisher.index')}}"><i
                                  class="fa fa-circle-o"></i>FREELANCERS</a>
                      </li>
                      <li><a href="{{route('company.search.student.index')}}"><i
                                  class="fa fa-circle-o"></i>PROFISSIONAIS</a></li>
                  </ul>
              </li>
              <li {{ (Request::is('empresa/mostrar') ? 'class=active' : '') }}
                  {{ (Request::is('empresa/editar') ? 'class=active' : '') }}>
                  <a href="{{route('company.show')}}">
                      <i class="fa fa-user-circle" aria-hidden="true"></i> <span>MEUS DADOS</span>
                  </a>
              </li>
              <li {{ (Request::is('empresa/cupom/*') ? 'class=active' : '') }}
                  {{ (Request::is('empresa/cupom') ? 'class=active' : '') }}>
                  <a href="{{route('company.coupon')}}">
                      <i class="fa fa-ticket" aria-hidden="true"></i> <span>CUPONS</span>
                  </a>
              </li>
              <li {{ (Request::is('empresa/ferramentas-marketing') ? 'class=active' : '') }}
                  {{ (Request::is('empresa/ferramentas-marketing/*') ? 'class=active' : '') }}>
                  <a href="{{route('company.tools-mkt')}}">
                      <i class="fa fa-cogs" aria-hidden="true"></i> <span>FERRAMENTAS DE MARKETING</span>
                  </a>
              </li>
              <li {{ (Request::is('empresa/conteudo-marketing') ? 'class=active' : '') }}
                  {{ (Request::is('empresa/conteudo-marketing/*') ? 'class=active' : '') }}>
                  <a href="{{route('company.content-mkt')}}">
                      <i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>CONTEÚDOS DE MARKETING</span>
                  </a>
              </li>
              <li {{ (Request::is('empresa/link') ? 'class=active' : '') }}
                  {{ (Request::is('empresa/link/*') ? 'class=active' : '') }}>
                  <a href="{{route('company.link')}}">
                      <i class="fa fa-info" aria-hidden="true"></i> <span>LINKS ÚTEIS</span>
                  </a>
              </li>

          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>