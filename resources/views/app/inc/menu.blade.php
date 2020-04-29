<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('app.home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('project.index')}}" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>Projetos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('about.index')}}" class="nav-link">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>Sobre</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/log-viewer" class="nav-link" target="_blank">
                <i class="nav-icon fas fa-bug"></i>
                <p>Logs</p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->