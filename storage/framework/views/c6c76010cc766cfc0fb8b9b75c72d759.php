

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper ml-5 pt-2" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <h1 class="text-center pt-4 pb-4 text-light" style="background-color: #1e90ff;">
                        <b>Dashboard</b>
                    </h1>
                    <div class="card-body">
                        <div class="row">
                            <?php $__currentLoopData = $groupedCounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan => $jumlah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $config = $cardConfig[$jabatan] ?? $cardConfig['default'];
                            $color = $config['color'];
                            $icon = $config['icon'];
                            ?>
                            <div class="col-md-4 mb-4">
                                <div class="card text-center" style="border: none; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                                    <div class="card-body <?php echo e($color); ?> text-white">
                                        <i class="<?php echo e($icon); ?>" style="font-size: 2rem; margin-bottom: 10px;"></i>
                                        <h5 class="card-title"><b><?php echo e(ucfirst($jabatan)); ?></b></h5>
                                        <p class="card-text" style="font-size: 2rem; font-weight: bold;"><?php echo e($jumlah); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            
                            <div class="col-md-4 mb-4">
                                <div class="card text-center" style="border: none; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                                    <div class="card-body <?php echo e($cardConfig['Semua Karyawan']['color']); ?> text-white">
                                        <i class="<?php echo e($cardConfig['Semua Karyawan']['icon']); ?>" style="font-size: 2rem; margin-bottom: 10px;"></i>
                                        <h5 class="card-title"><b>Semua Karyawan</b></h5>
                                        <p class="card-text" style="font-size: 2rem; font-weight: bold;"><?php echo e($totalKaryawan); ?></p>
                                    </div>
                                </div>
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
<?php echo $__env->make('hrd.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/hrd/dashboard.blade.php ENDPATH**/ ?>