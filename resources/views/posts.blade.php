@extends('dashboard.layouts.main')

@section('container')


<div class="text-center flex-wrap flex-md-nowrap align-items-center pt-2 pb-1 mb-3 border-bottom">
  <h1 class="h2">Data Keseluruhan Lowongan Pekerjaan</h1>
</div>
<div class="container">
  <div class="row justify-content-center mb-1">
    <div class="col-md-12">
      <div class="pt-2 pb-2 mb-2">
      <form action="{{ url('/post/cari') }}" method="get" class="d-flex">
          <input class="form-control me-1" type="search" name="cari"  placeholder="Pencarian" id="cari">
          <button type="submit" class="btn btn-primary">Cari</button>
          </form>
         </div>    
    </div>
  </div>
  <div class="card mb-2">
    <div class="bg-white">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-table me-1"></i>
        Data Lowongan Pekerjaan
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped-columns  table-bordered table-sm bg-white" >
            <thead>
              <tr>
                <th>No</th>
                <th>Nama_Perusahaan</th>
                <th>Alamat_Perusahaan</th>
                <th>No HP</th>
                <th>Tanggal</th>
                <th>Poto Perusahaan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->nama_perusahaan }}</td>
                <td>{{ $post->alamat }}</td>
                <td>{{ $post->no_hp }}</td>
                <td>{{ $post->tgl }}</td>
                <td><img src="{{ asset('storage/'.$post->image) }}" width="70" alt=""></td>
                <td><a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                  <span data-feather="eye"></span></a></td>
              </tr>
                  
              @endforeach
                
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="d-flex justify-content-end mt-3 mb-3">
  {{ $posts->links() }}
</div>

  @endsection







