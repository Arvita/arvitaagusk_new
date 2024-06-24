

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin">
  <a href="/publication">
    <!-- <button type="button" class="btn btn-light btn-icon-text col-1 mb-3">
      <i class="mdi mdi-arrow-left mr-2"></i>Kembali
    </button> -->
    <button type="button" class="btn btn-light btn-icon-text col-1 mb-3">
      <i class="mdi mdi-subdirectory-arrow-left btn-icon-prepend"></i>
      Kembali
    </button>
  </a>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add Publication</h4>
      <form class="form-sample">
        <!-- <p class="card-description">
          Publication Info
        </p> -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Judul</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tahun</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Penulis</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Link</label>
              <div class="col-sm-9">
                <input type="url" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Jurnal</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary col-12">Submit</button>
              </div>
              <div class="col-sm-6"></div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views\admin\publication\create.blade.php ENDPATH**/ ?>