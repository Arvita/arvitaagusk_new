

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
            <tr>
              <td><?php echo e($no++); ?></td>
              <td></td>
              <td></td>
              <td><label class="badge badge-primary">Link</label></td>
              <td>
                <button type="button" class="btn btn-info btn-icon">
                    <i class="typcn typcn-eye-outline"></i>
                </button>  
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
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views\admin\portofolio\index.blade.php ENDPATH**/ ?>