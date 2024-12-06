

<?php $__env->startSection('title', 'Edit Dosen'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Edit Dosen</h2>
    <form action="<?php echo e(route('dosen.update', $dosen->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="kode_dosen">Kode Dosen:</label>
            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" value="<?php echo e($dosen->kode_dosen); ?>" required>
        </div>

        <div class="form-group">
            <label for="nama_dosen">Nama Dosen:</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?php echo e($dosen->nama_dosen); ?>" required>
        </div>

        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip" value="<?php echo e($dosen->nip); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($dosen->email); ?>" required>
        </div>

        <div class="form-group">
            <label for="no_telepon">No. Telepon:</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo e($dosen->no_telepon); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dimas\Documents\GitHub\WAD2024-DHIMMAS-1202223217\project_m5_dhimmas\resources\views/dosen/edit.blade.php ENDPATH**/ ?>