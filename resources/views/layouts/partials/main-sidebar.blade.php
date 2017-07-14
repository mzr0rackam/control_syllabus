<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    @if (! Auth::guest())
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
        </div>
      </div>
    @endif

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MENÚ</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active">
        <a href="{{ url('home') }}">
          <i class='fa fa-home'></i>
          <span>{{ trans('adminlte_lang::message.home') }}</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class='fa fa-university'></i>
          <span>Escuelas</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ url('escuela/industrial') }}">Ingeniería Industrial</a>
          </li>
          <li>
            <a href="{{ url('escuela/sistemas') }}">Ingeniería de Sistemas</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{ url('docentes') }}">
          <i class='fa fa-briefcase'></i>
          <span>Docentes</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='fa fa-files-o'></i>
          <span>Syllabus</span>
        </a>
      </li>
      <li>
        <a href="{{ url('cursos') }}">
          <i class='fa fa-bookmark'></i>
          <span>Cursos</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='fa fa-book'></i>
          <span>Clases</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='fa fa-pie-chart'></i>
          <span>Control</span>
        </a>
      </li>

      {{-- <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
          <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
        </ul>
      </li> --}}
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
