

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper ml-5 pt-2" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <h1 class="text-center pt-4 pb-4 text-light" style="background-color: #1e90ff;"><b>Dashboard</b></h1>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-2 ">
                                    <div class="card text-white bg-success mb-3" style="height: 190px;">
                                        <div class="card-header text-center"><i class="fas fa-check-circle fa-5x"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Jumlah Masuk <?php echo e($jumlahMasuk); ?> Hari</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="card text-white bg-primary mb-3" style="height: 190px;">
                                        <div class="card-header text-center"><i class="fas fa-medkit fa-5x"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Jumlah Sakit <?php echo e($jumlahSakit); ?> Hari</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="card text-white bg-danger mb-3" style="height: 190px;">
                                        <div class="card-header text-center"><i class="fas fa-user-clock fa-5x"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><b>Jumlah Izin <?php echo e($jumlahIzin); ?> Hari</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <h3 class="text-center mt-3 mb-4"><b>Absen Bulan Ini</b></h3>
                            <table class="table table-striped table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Jam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($index + 1); ?></td>
                                        <td><?php echo e($absen->tanggal); ?></td>
                                        <td><?php echo e($absen->status); ?></td>
                                        <td><?php echo e($absen->jam); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/dashboard.blade.php ENDPATH**/ ?>