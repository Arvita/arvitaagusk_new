

<?php $__env->startSection('content'); ?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Mahasiswa Bimbingan</h4>
        <a href="/supervised/create"><button type="button" class="btn btn-primary col-1">
            + Add
        </button></a>
      <div class="table-responsive">
        <table class="table table-hover" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th width="25%">Student Name</th>
              <th width="35%">Research Topic</th>
              <th width="10%">Finish Year</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $superviseds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supervised): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td><?php echo e($no++); ?>.</td>
              <td><?php echo e($supervised->namamhs); ?></td>
              <td><?php echo e($supervised->topik); ?></td>
              <td><?php echo e($supervised->tahun); ?></td>
              <td>
              <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?');" action="<?php echo e(route('supervised.destroy', $supervised->id)); ?>" method="POST">
                  <!-- <button type="button" class="btn btn-info btn-icon">
                      <i class="typcn typcn-eye-outline"></i>
                    </button>   -->
                  <a href="<?php echo e(route('supervised.edit', $supervised->id)); ?>">
                    <button type="button" class="btn btn-warning btn-icon">
                      <i class="typcn typcn-pencil"></i>
                    </button>
                  </a>
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" class="btn btn-danger btn-icon">
                      <i class="typcn typcn-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
              <td>Data Belum Tersedia</td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views/admin/supervised/index.blade.php ENDPATH**/ ?>