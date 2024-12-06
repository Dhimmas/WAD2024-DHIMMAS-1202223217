
<?php $__env->startSection('title', 'Daftar Dosen'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Daftar Dosen</h2>
    <a href="<?php echo e(route('dosen.create')); ?>">Tambah Dosen</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($dosen->nama); ?></td>
                    <td><?php echo e($dosen->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('dosen.edit', $dosen->id)); ?>">Edit</a> |
                        <form action="<?php echo e(route('dosen.destroy', $dosen->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?><?php /**PATH C:\Users\dimas\Documents\GitHub\WAD2024-DHIMMAS-1202223217\project_m5_dhimmas\resources\views/index.blade.php ENDPATH**/ ?>