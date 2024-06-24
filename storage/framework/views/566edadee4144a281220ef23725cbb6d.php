

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin">
  
  <form action="<?php echo e(route('supervised.update', $superviseds->id)); ?>" method="POST" class="form-sample">
  <div class="card">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
    <div class="card-body">
      <h4 class="card-title mb-5">Add Supervised Student</h4>
        <!-- <p class="card-description">
          Supervised Info
        </p> -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Student Name</label>
              <div class="col-sm-9">
                <input type="text" name="namamhs" class="form-control" value="<?php echo e(old('namamhs', $superviseds->namamhs)); ?>" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Finish Year</label>
              <div class="col-sm-9">
                <input type="text" name="tahun" class="form-control" value="<?php echo e(old('tahun', $superviseds->tahun)); ?>" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Research Topic</label>
              <div class="col-sm-9">
                <input type="text" name="topik" class="form-control" value="<?php echo e(old('tahun', $superviseds->topik)); ?>" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row ml-4">
            <a href="/supervised">
              <button type="button" class="btn btn-light btn-icon-text">
                <i class="mdi mdi-subdirectory-arrow-left btn-icon-prepend"></i>
                Kembali
              </button>
            </a>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row justify-content-end mr-5">
          <button type="submit" class="btn btn-primary col-3">Submit</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views/admin/supervised/edit.blade.php ENDPATH**/ ?>