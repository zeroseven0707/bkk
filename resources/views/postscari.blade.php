@extends('dashboard.layouts.main')

@section('container')
  <div class="text-center pt-1 pb-1 mb-1 border-bottom">
      <h1 class="h2">Data Pencarian Lowongan Pekerjaan</h1>
    </div>
    <div class="container pt-1 pb-2 mb-3">
    <a href="/post"class="btn btn-secondary"><span data-feather="arrow-left"></span>  Back To all My Loker</a>
    </div>
    <div class="card mb-2">
      <div class="bg-white">
      <div class="card-header bg-primary text-white">
          <i class="fas fa-table me-1"></i>
          Data Table Pencarian Lowongan Pekerjaan
      
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

  @endsection







