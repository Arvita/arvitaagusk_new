@extends('admin/layouts.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Publikasi</h4>
        <a href="/publication/create"><button type="button" class="btn btn-primary col-1">
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
              <!-- <th>Title</th>
              <th>Jurnal</th>
              <th>Author</th> -->
              <th width="35%">Detail</th>
              <th width="10%">Year</th>
              <th width="35%">Link</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($publications as $publication)
            <tr>
              <td>{{ $no++ }}.</td>
              <td>"{{ $publication->judul }}", {{ $publication->penulis }}, {{ $publication->jurnal }}</td>
              <td>{{ $publication->tahun }}</td>
              <td><label class="badge badge-primary">{{ $publication->link }}</label></td>
              <td>
                <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?');" action="{{ route('publication.destroy', $publication->id) }}" method="POST">
                  <!-- <button type="button" class="btn btn-info btn-icon">
                      <i class="typcn typcn-eye-outline"></i>
                    </button>   -->
                  <a href="{{ route('publication.edit', $publication->id) }}">
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
              <!-- <td class="text-success"> 82.00% <i class="typcn typcn-arrow-sorted-up"></i></td> -->
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