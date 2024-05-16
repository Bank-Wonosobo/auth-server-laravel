<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">Menu</li>

    <li class="nav-item">
      <a href="{{ route('home') }}" class="nav-link {{ Route::is('home*') ? '' : 'collapsed' }}" href="{{ route('home') }}">
        <i class='bx bx-home'></i>
        <span>Home</span>
      </a>
    </li>


    <li class="nav-item ">
      <a href="#" class="nav-link collapsed" href="users-profile.html">
        <i class='bx bx-user'></i>
        <span>Profile</span>
      </a>
    </li>

    <li class="nav-heading">User Management</li>

    {{-- @can('bw:auth:user:manage') --}}
    <li class="nav-item ">
        <a href="{{ route('users.index') }}" class="nav-link {{ Route::is('clients.*') ? '' : 'collapsed' }}">
            <i class='bx bx-user-plus'></i>
          <span>User</span>
        </a>
    </li>
    {{-- @endcan --}}

    <li class="nav-item ">
        <a href="{{ route('roles.index') }}" class="nav-link {{ Route::is('roles.*') ? '' : 'collapsed' }}">
            <i class='bx bx-user-voice'></i>
            <span>Hak Akses</span>
        </a>
    </li>

    <li class="nav-item ">
        <a href="{{ route('clients.index') }}" class="nav-link {{ Route::is('clients.*') ? '' : 'collapsed' }}">
            <i class='bx bx-key' ></i>
            <span>Oauth Client</span>
        </a>
    </li>

    <li class="nav-heading">Pengaturan</li>

    <li class="nav-item ">
        <a href="{{ route('apps.index') }}" class="nav-link {{ Route::is('apps.*') ? '' : 'collapsed' }}" >
            <i class='bx bx-desktop'></i>
          <span>List App</span>
        </a>
    </li>

    <li class="nav-heading">Lain-lain</li>

    <li class="nav-item">
      <a class="nav-link {{ Route::is('admin.faq') ? '' : 'collapsed' }}" href="#">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link {{ Route::is('admin.contact') ? '' : 'collapsed' }}" href="">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->
</ul>

{{-- <!-- Nav Item - Dashboard -->
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
@endcan --}}
