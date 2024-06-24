

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
              <th>Student Name</th>
              <th>Research Topic</th>
              <th>Finish Year</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo e($no++); ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <button type="button" class="btn btn-warning btn-icon">
                    <i class="typcn typcn-pencil"></i>
                </button>
                <button type="button" class="btn btn-danger btn-icon">
                    <i class="typcn typcn-trash"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views\admin\supervised\index.blade.php ENDPATH**/ ?>