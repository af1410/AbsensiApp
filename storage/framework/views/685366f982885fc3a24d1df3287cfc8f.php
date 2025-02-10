<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary " style="background-color: #1e90ff; width: 250px; transition: width 0.3s ease;">
    <!-- Brand Logo -->
    <a href=" /" class="brand-link">
        <img src="<?php echo e(asset('img/favicon.png')); ?>" alt="AbsensiApp" class="brand-image " style=" width: 60px; height: 80px;">
        <span class="brand-text font-light"><b>Absensi Karyawan</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item <?php if(request()->routeIs('admin.dashboard.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class=" nav-link <?php if(request()->routeIs('admin.dashboard.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php if(request()->routeIs('admin.absensi*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('admin.absensi.index')); ?>" class="nav-link <?php if(request()->routeIs('admin.absensi.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            Absensi
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php if(request()->routeIs('admin.karyawan.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('admin.karyawan.index')); ?>" class="nav-link <?php if(request()->routeIs('admin.karyawan.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            Karyawan
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php if(request()->routeIs('admin.HRD.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('admin.HRD.index')); ?>" class="nav-link <?php if(request()->routeIs('admin.HRD.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            HRD
                        </p>
                    </a>
                </li>
                <li class="nav-item <?php if(request()->routeIs('admin.admin.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('admin.admin.index')); ?>" class="nav-link <?php if(request()->routeIs('admin.admin.*')): ?> active <?php endif; ?>">
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
</aside><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>