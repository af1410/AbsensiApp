<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary " style="background-color: #1e90ff; width: 250px; transition: width 0.3s ease;">
    <!-- Brand Logo -->
    <a href=" /" class="brand-link">
        <img src="{{ asset('img/favicon.png') }}" alt="BerkahIbu" class="brand-image " style=" width: 60px; height: 80px;">
        <span class="brand-text font-light"><b>Absensi Karyawan</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item @if(request()->routeIs('admin.dashboard.*')) menu-open @endif">
                    <a href="{{ route('admin.dashboard') }}" class=" nav-link @if(request()->routeIs('admin.dashboard.*')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('.*')) menu-open @endif">
                    <a href="" class="nav-link @if(request()->routeIs('admin.barang.*')) active @endif">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            Absensi
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('.*')) menu-open @endif">
                    <a href="" class="nav-link @if(request()->routeIs('admin.barang.*')) active @endif">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            Karyawan
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('.*')) menu-open @endif">
                    <a href="" class="nav-link @if(request()->routeIs('admin.barang.*')) active @endif">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            HRD
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('admin.admin.*')) menu-open @endif">
                    <a href="{{ route('admin.admin.index') }}" class="nav-link @if(request()->routeIs('admin.admin.*')) active @endif">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>