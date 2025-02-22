<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary" style="background-color: #1e90ff; width: 250px; transition: width 0.3s ease;">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?php echo e(asset('img/favicon.png')); ?>" alt="AbsensiApp" class="brand-image" style="width: 60px; height: 80px;">
        <span class="brand-text font-light"><b>Absensi Karyawan</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item <?php if(request()->routeIs('hrd.dashboard*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('hrd.dashboard')); ?>" class="nav-link <?php if(request()->routeIs('hrd.dashboard*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- Absen -->
                <li class="nav-item <?php if(request()->routeIs('hrd.absen.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('hrd.absen.index')); ?>" class="nav-link <?php if(request()->routeIs('hrd.absen.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>Absen</p>
                    </a>
                </li>
                <!-- Absensi -->
                <li class="nav-item <?php if(request()->routeIs('hrd.absensi.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('hrd.absensi.index')); ?>" class="nav-link <?php if(request()->routeIs('hrd.absensi.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Data Absensi</p>
                    </a>
                </li>
                <!-- Karyawan -->
                <li class="nav-item <?php if(request()->routeIs('hrd.karyawan.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('hrd.karyawan.index')); ?>" class="nav-link <?php if(request()->routeIs('hrd.karyawan.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Data Karyawan</p>
                    </a>
                </li>
                <!-- HRD -->
                <li class="nav-item <?php if(request()->routeIs('hrd.HRD.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('hrd.HRD.index')); ?>" class="nav-link <?php if(request()->routeIs('hrd.HRD.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Data HRD</p>
                    </a>
                </li>
                <!-- Admin -->
                <!-- <li class="nav-item <?php if(request()->routeIs('hrd.admin.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('hrd.admin.index')); ?>" class="nav-link <?php if(request()->routeIs('hrd.admin.*')): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>Data Admin</p>
                    </a>
                </li> -->
                <li class="nav-item <?php if(request()->routeIs('hrd.profil.*')): ?> menu-open <?php endif; ?>">
                    <a href="<?php echo e(route('hrd.profile.edit')); ?>" class="nav-link <?php if(request()->routeIs('hrd.profil.*')): ?> active <?php endif; ?>">
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
</aside><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/hrd/layouts/sidebar.blade.php ENDPATH**/ ?>