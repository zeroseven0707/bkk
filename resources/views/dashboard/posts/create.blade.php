@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 ">Input Data Lowongan Kerja</h1>
  </div>
<div class="card mb-2 mt-3 col-md-6">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-table me-1"></i>
        Input Data Lowongan Kerja
    </div>
    <div class="card-body">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
          <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" 
          id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" value="{{ old('nama_perusahaan') }}"required autofocus>
          @error('nama_perusahaan')
          <div class="idvalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Profile Perusahaan</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" 
            name="image">
            @error('image')
            <div class="idvalid-feedback">
             {{ $message }}
          </div>  
        @enderror
      </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat Perusahaan</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" 
          id="alamat" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}"required>
          @error('alamat')
          <div class="idvalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">No HP</label>
          <input type="text" class="form-control @error('no_hp') is-invalid @enderror" 
          id="no_hp" name="no_hp" placeholder="No HP" value="{{ old('no_hp') }}"required>
          @error('no_hp')
          <div class="idvalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
          
          <div class="mb-3">
          <label for="tgl" class="form-label">Tanggal</label>
          <input type="date" class="form-control @error('tgl') is-invalid @enderror" 
          id="tgl" name="tgl" placeholder="tanggal" value="{{ old('tgl') }}"required>
          @error('tgl')
          <div class="idvalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
          <a href="/dashboard/posts"class="btn btn-secondary">Close</a>
          <button type="submit" class="btn btn-primary">Create Postingan</button>
        </div>
      </form>
      </div>
    </div>


@endsection




