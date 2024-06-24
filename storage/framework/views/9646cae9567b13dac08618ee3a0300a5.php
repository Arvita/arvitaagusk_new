

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin">
  
  <form action="<?php echo e(route('portofolio.store')); ?>" method="POST" class="form-sample">
  <div class="card">
      <?php echo csrf_field(); ?>
    <div class="card-body">
      <h4 class="card-title mb-5">Add Portofolio</h4>
        <!-- <p class="card-description">
          Portofolio Info
        </p> -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Title</label>
              <div class="col-sm-9">
                <input type="text" name="judul" class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Picture</label>
              <div class="col-sm-9">
                <input type="file" name="image" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Link</label>
                <div class="col-sm-9">
                  <input type="url" name="link" class="form-control" />
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
            <a href="/portofolio">
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
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views/admin/portofolio/create.blade.php ENDPATH**/ ?>