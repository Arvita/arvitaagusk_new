

<?php $__env->startSection('content'); ?>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Publikasi</h4>
        <a href="/publication/create"><button type="button" class="btn btn-primary col-1">
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
              <!-- <th>Title</th>
              <th>Jurnal</th>
              <th>Author</th> -->
              <th width="35%">Detail</th>
              <th width="10%">Year</th>
              <th width="35%">Link</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td><?php echo e($no++); ?>.</td>
              <td>"<?php echo e($publication->judul); ?>", <?php echo e($publication->penulis); ?>, <?php echo e($publication->jurnal); ?></td>
              <td><?php echo e($publication->tahun); ?></td>
              <td><label class="badge badge-primary"><?php echo e($publication->link); ?></label></td>
              <td>
                <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?');" action="<?php echo e(route('publication.destroy', $publication->id)); ?>" method="POST">
                  <!-- <button type="button" class="btn btn-info btn-icon">
                      <i class="typcn typcn-eye-outline"></i>
                    </button>   -->
                  <a href="<?php echo e(route('publication.edit', $publication->id)); ?>">
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
              <!-- <td class="text-success"> 82.00% <i class="typcn typcn-arrow-sorted-up"></i></td> -->
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
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views/admin/publication/index.blade.php ENDPATH**/ ?>