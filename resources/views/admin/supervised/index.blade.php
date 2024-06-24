@extends('admin/layouts.template')

@section('content')
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
              <th width="25%">Student Name</th>
              <th width="35%">Research Topic</th>
              <th width="10%">Finish Year</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($superviseds as $supervised)
            <tr>
              <td>{{ $no++ }}.</td>
              <td>{{ $supervised->namamhs}}</td>
              <td>{{ $supervised->topik }}</td>
              <td>{{ $supervised->tahun }}</td>
              <td>
              <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?');" action="{{ route('supervised.destroy', $supervised->id) }}" method="POST">
                  <!-- <button type="button" class="btn btn-info btn-icon">
                      <i class="typcn typcn-eye-outline"></i>
                    </button>   -->
                  <a href="{{ route('supervised.edit', $supervised->id) }}">
                    <button type="button" class="btn btn-warning btn-icon">
                      <i class="typcn typcn-pencil"></i>
                    </button>
                  </a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-icon">
                      <i class="typcn typcn-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td>Data Belum Tersedia</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection