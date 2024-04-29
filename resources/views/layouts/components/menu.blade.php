<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Daftar Menu
</div>


<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-id-card"></i>
        <span>Personal Info</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-lock"></i>
        <span>Keamanan</span></a>
</li>

@can('bw:auth:user:manage')
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>User</span></a>
</li>
@endcan

@can('bw:auth:manage-role')
<li class="nav-item">
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Hak Akses</span></a>
</li>
@endcan

@can('bw:auth:manage-oauth')
<li class="nav-item">
    <a class="nav-link" href="{{ route('clients.index') }}">
        <i class="fas fa-fw fa-desktop"></i>
        <span>OAouth</span></a>
</li>
@endcan

@can('bw:auth:manage-app')
<li class="nav-item">
    <a class="nav-link" href="{{ route('apps.index') }}">
        <i class="fas fa-fw fa-desktop"></i>
        <span>List App</span></a>
</li>
@endcan
