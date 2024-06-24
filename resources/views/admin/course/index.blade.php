@extends('admin/layouts.template')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Pelajaran</h4>
        <a href="/course/create"><button type="button" class="btn btn-primary col-1">
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
              <th>Name</th>
              <th>Link</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @forelse ($courses as $course)
            <tr>
              <td>{{ $no++ }}.</td>
              <td>{{ $course->namapel }}</td>
              <td>{{ $course->link }}</td>
              <td>
              <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?');" action="{{ route('course.destroy', $course->id) }}" method="POST">
                  <!-- <button type="button" class="btn btn-info btn-icon">
                      <i class="typcn typcn-eye-outline"></i>
                    </button>   -->
                  <a href="{{ route('course.edit', $course->id) }}">
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