@extends('admin/layouts.template')

@section('content')
<div class="col-12 grid-margin">
  
  <form action="{{ route('course.update', $courses->id) }}" method="POST" class="form-sample">
  <div class="card">
      @csrf
      @method('PUT')
    <div class="card-body">
      <h4 class="card-title mb-5">Add Course</h4>
        <!-- <p class="card-description">
          Course Info
        </p> -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama Pelatihan</label>
              <div class="col-sm-9">
                <input type="text" name="namapel" value="{{ old('namapel', $courses->namapel) }}" class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Link</label>
              <div class="col-sm-9">
                <input type="url" name="link" value="{{ old('link', $courses->link) }}" class="form-control" />
              </div>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row ml-4">
            <a href="/course">
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
@endsection
