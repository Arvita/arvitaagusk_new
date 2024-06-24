

<?php $__env->startSection('content'); ?>
<div class="col-12 grid-margin">
  <a href="/supervised">
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
      <h4 class="card-title">Add Supervised Student</h4>
      <form class="form-sample">
        <!-- <p class="card-description">
          Publication Info
        </p> -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Student Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Finish Year</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" value="" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Research Topic</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" required/>
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
        <!-- <p class="card-description">
          Address
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Address 1</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Membership</label>
              <div class="col-sm-4">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                    Free
                  </label>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                    Professional
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">State</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Address 2</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Postcode</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">City</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Country</label>
              <div class="col-sm-9">
                <select class="form-control">
                  <option>America</option>
                  <option>Italy</option>
                  <option>Russia</option>
                  <option>Britain</option>
                </select>
              </div>
            </div>
          </div>
        </div> -->
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arvitaagusk\resources\views\admin\supervised\create.blade.php ENDPATH**/ ?>