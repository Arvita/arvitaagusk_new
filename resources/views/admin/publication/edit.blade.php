@extends('admin/layouts.template')

@section('content')
<div class="col-12 grid-margin">
  
  <form action="{{ route('publication.update', $publications->id) }}" method="POST" class="form-sample">
  <div class="card">
      @csrf
      @method('PUT')
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
                <input type="text" name="judul" class="form-control" value="{{ old('judul', $publications->judul) }}" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tahun</label>
              <div class="col-sm-9">
                <input type="number" name="tahun" class="form-control" value="{{ old('tahun', $publications->tahun) }}" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Penulis</label>
              <div class="col-sm-9">
                <input type="text" name="penulis" class="form-control" value="{{ old('penulis', $publications->penulis) }}" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Link</label>
              <div class="col-sm-9">
                <input type="url" name="link" value="{{ old('link', $publications->link) }}" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Jurnal</label>
              <div class="col-sm-9">
                <input type="text" name="jurnal" value="{{ old('jurnal', $publications->jurnal) }}" class="form-control" />
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
@endsection