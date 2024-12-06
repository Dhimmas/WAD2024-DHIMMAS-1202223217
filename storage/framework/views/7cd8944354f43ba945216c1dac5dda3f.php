<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Manajemen Dosen dan Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('dosen.index')); ?>">Daftar Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('mahasiswa.index')); ?>">Daftar Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\dimas\Documents\GitHub\WAD2024-DHIMMAS-1202223217\project_m5_dhimmas\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>