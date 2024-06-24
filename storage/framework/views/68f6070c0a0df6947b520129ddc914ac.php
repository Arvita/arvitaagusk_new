

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin">
  
  <form action="<?php echo e(route('publication.update', $publications->id)); ?>" method="POST" class="form-sample">
  <div class="card">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
    <div class="card-body">
      <h4 class="card-title">Add Publication</h4>
        <!-- <p class="card-description">
          Publication Info
        </p> -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Judul</label>
              <div class="col-sm-9">
                <input type="text" name="judul" class="form-control" value="<?php echo e(old('judul', $publications->judul)); ?>" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tahun</label>
              <div class="col-sm-9">
                <input type="number" name="tahun" class="form-control" value="<?php echo e(old('tahun', $publications->tahun)); ?>" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Penulis</label>
              <div class="col-sm-9">
                <input type="text" name="penulis" class="form-control" value="<?php echo e(old('penulis', $publications->penulis)); ?>" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Link</label>
              <div class="col-sm-9">
                <input type="url" name="link" value="<?php echo e(old('link', $publications->link)); ?>" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Jurnal</label>
              <div class="col-sm-9">
                <input type="text" name="jurnal" value="<?php echo e(old('jurnal', $publications->jurnal)); ?>" class="form-control" />
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
            <a href="/publication">
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
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views/admin/publication/edit.blade.php ENDPATH**/ ?>