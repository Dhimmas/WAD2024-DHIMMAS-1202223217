

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Selamat Datang di Dashboard!</h2>
        <p>Ini adalah halaman utama untuk manajemen dosen dan mahasiswa.</p>
        <p>Gunakan menu di sidebar untuk mengakses data dosen dan mahasiswa.</p>

        <!-- Ringkasan Statistik -->
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Jumlah Dosen</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($dosenCount); ?></h5>
                        <p class="card-text">Total dosen yang terdaftar di sistem.</p>
                        <a href="<?php echo e(route('dosen.index')); ?>" class="btn btn-light">Lihat Dosen</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Jumlah Mahasiswa</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($mahasiswaCount); ?></h5>
                        <p class="card-text">Total mahasiswa yang terdaftar di sistem.</p>
                        <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-light">Lihat Mahasiswa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Jumlah Dosen Wali</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($dosenWaliCount); ?></h5>
                        <p class="card-text">Jumlah dosen yang menjadi wali mahasiswa.</p>
                        <a href="<?php echo e(route('dosen.index')); ?>" class="btn btn-light">Lihat Dosen Wali</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan Tugas Aplikasi -->
        <div class="row">
            <div class="col-md-6">
                <h3>Tugas Manajemen Dosen</h3>
                <p>Melihat, menambah, mengedit, dan menghapus data dosen di sistem.</p>
                <a href="<?php echo e(route('dosen.index')); ?>" class="btn btn-primary">Kelola Dosen</a>
            </div>
            <div class="col-md-6">
                <h3>Tugas Manajemen Mahasiswa</h3>
                <p>Melihat, menambah, mengedit, dan menghapus data mahasiswa di sistem.</p>
                <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-primary">Kelola Mahasiswa</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dimas\Documents\GitHub\WAD2024-DHIMMAS-1202223217\project_m5_dhimmas\resources\views/dashboard/index.blade.php ENDPATH**/ ?>