

<?php $__env->startSection('content'); ?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Portofolio</h4>
        <a href="/portofolio/create"><button type="button" class="btn btn-primary col-1">
            + Add
        </button></a>
      <!-- <p class="card-description">
        Add class <code>.table-hover</code>
      </p> -->
      <div class="table-responsive">
        <table class="table table-hover" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Picture</th>
              <th>Link</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $portofolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portofolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td><?php echo e($no++); ?>.</td>
              <td><?php echo e($portofolio->judul); ?></td>
              <td><?php echo e($portofolio->image); ?></td>
              <td><?php echo e($portofolio->link); ?></td>
              <td>
              <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?');" action="<?php echo e(route('portofolio.destroy', $portofolio->id)); ?>" method="POST">
                  <!-- <button type="button" class="btn btn-info btn-icon">
                      <i class="typcn typcn-eye-outline"></i>
                    </button>   -->
                  <a href="<?php echo e(route('portofolio.edit', $portofolio->id)); ?>">
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
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views/admin/portofolio/index.blade.php ENDPATH**/ ?>