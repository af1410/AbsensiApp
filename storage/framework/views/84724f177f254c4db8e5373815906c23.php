

<?php $__env->startSection('title', 'Data Absensi'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper ml-5 pr-5 pt-5" style="background-color: #989da1;">
    <div class="container-fluid pt-2 mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h2 class="text-center pt-4 mb-1 pb-4 text-light" style="background-color: #1e90ff;"><b>Data Absensi</b></h2>
                    <div class="card-body">
                        <?php if($message = session('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                        <?php endif; ?>

                        <!-- Form pencarian dan filter -->
                        <form method="GET" action="<?php echo e(route('admin.absensi.index')); ?>" class="mb-4">
                            <div class="row">
                                <!-- Input pencarian nama -->
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Nama"
                                        value="<?php echo e(request('search')); ?>">
                                </div>
                                <!-- Combobox filter jabatan -->
                                <div class="col-md-4">
                                    <select name="jabatan" class="form-control">
                                        <option value="">Semua Jabatan</option>
                                        <?php $__currentLoopData = $allJabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($j->jabatan); ?>" <?php echo e(request('jabatan') == $j->jabatan ? 'selected' : ''); ?>>
                                            <?php echo e($j->jabatan); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <!-- Tombol cari -->
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search"></i> Cari</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="reset" class="btn btn-danger w-100">
                                        <i class="fas fa-sync-alt"></i> reset
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-stripped table-bordered mt-2">
                            <thead class="thead text-light" style="background-color: #1e90ff;">
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__empty_1 = true; $__currentLoopData = $absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <th><?php echo e($no++); ?></th>
                                    <th><?php echo e($absen->NIK); ?></th>
                                    <th><?php echo e($absen->name); ?></th>
                                    <th><?php echo e($absen->jabatan); ?></th>
                                    <th><?php echo e($absen->tanggal); ?></th>
                                    <th><?php echo e($absen->jam); ?></th>
                                    <th><?php echo e($absen->status); ?></th>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7" class="text-center">Data tidak ditemukan.</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/admin/absensi/index.blade.php ENDPATH**/ ?>