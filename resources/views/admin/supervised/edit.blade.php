@extends('admin/layouts.template')

@section('content')
<div class="col-12 grid-margin">
  
  <form action="{{ route('supervised.update', $superviseds->id) }}" method="POST" class="form-sample">
  <div class="card">
      @csrf
      @method('PUT')
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
                <input type="text" name="namamhs" class="form-control" value="{{ old('namamhs', $superviseds->namamhs) }}" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Finish Year</label>
              <div class="col-sm-9">
                <input type="text" name="tahun" class="form-control" value="{{ old('tahun', $superviseds->tahun) }}" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Research Topic</label>
              <div class="col-sm-9">
                <input type="text" name="topik" class="form-control" value="{{ old('tahun', $superviseds->topik) }}" required/>
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
@endsection