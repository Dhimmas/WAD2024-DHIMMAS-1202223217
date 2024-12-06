

<?php $__env->startSection('title', 'Tambah Dosen'); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="form-container">
        <h2>Tambah Dosen</h2>
        <form action="<?php echo e(route('dosen.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="kode_dosen">Kode Dosen:</label>
                <input type="text" id="kode_dosen" name="kode_dosen" required>
            </div>
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" id="nama_dosen" name="nama_dosen" required>
            </div>
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="no_telepon">No. Telepon:</label>
                <input type="text" id="no_telepon" name="no_telepon" required>
            </div>
            <button type="submit" class="btn-primary">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dimas\Documents\GitHub\WAD2024-DHIMMAS-1202223217\project_m5_dhimmas\resources\views/dosen/create.blade.php ENDPATH**/ ?>