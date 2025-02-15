<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary" style="background-color: #1e90ff; width: 250px; transition: width 0.3s ease;">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/favicon.png') }}" alt="AbsensiApp" class="brand-image" style="width: 60px; height: 80px;">
        <span class="brand-text font-light"><b>Absensi Karyawan</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item @if(request()->routeIs('hrd.dashboard*')) menu-open @endif">
                    <a href="{{ route('hrd.dashboard') }}" class="nav-link @if(request()->routeIs('hrd.dashboard*')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- Absen -->
                <li class="nav-item @if(request()->routeIs('hrd.absen.*')) menu-open @endif">
                    <a href="{{ route('hrd.absen.index') }}" class="nav-link @if(request()->routeIs('hrd.absen.*')) active @endif">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>Absen</p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('admin.absensi.*')) menu-open @endif">
                    <a href="{{ route('hrd.absensi.index') }}" class="nav-link @if(request()->routeIs('admin.absensi.*')) active @endif">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Absensi</p>
                    </a>
                </li>
                <!-- Karyawan -->
                <li class="nav-item @if(request()->routeIs('admin.karyawan.*')) menu-open @endif">
                    <a href="{{ route('hrd.karyawan.index') }}" class="nav-link @if(request()->routeIs('admin.karyawan.*')) active @endif">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Karyawan</p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('hrd.profile.*')) menu-open @endif">
                    <a href="{{ route('hrd.profile.edit') }}" class="nav-link @if(request()->routeIs('hrd.profile.*')) active @endif">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>