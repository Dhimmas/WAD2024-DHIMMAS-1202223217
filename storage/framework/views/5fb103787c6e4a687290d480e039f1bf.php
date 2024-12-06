

<?php $__env->startSection('title', 'Edit Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Edit Mahasiswa</h2>
    <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo e($mahasiswa->nim); ?>" required>
        </div>

        <div class="form-group">
            <label for="nama_mahasiswa">Nama Mahasiswa:</label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?php echo e($mahasiswa->nama_mahasiswa); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($mahasiswa->email); ?>" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo e($mahasiswa->jurusan); ?>" required>
        </div>

        <div class="form-group">
            <label for="dosen_id">Dosen Wali:</label>
            <select class="form-control" id="dosen_id" name="dosen_id" required>
                <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dosen->id); ?>" <?php echo e($mahasiswa->dosen_id == $dosen->id ? 'selected' : ''); ?>><?php echo e($dosen->kode_dosen); ?> - <?php echo e($dosen->nama_dosen); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dimas\Documents\GitHub\WAD2024-DHIMMAS-1202223217\project_m5_dhimmas\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>