@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Postingan Lowongan Pekerjaan</h1>
  </div>
  <div class="card mb-2 col-md-6">
    <div class="bg-white">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-table me-1"></i>
        Edit Postingan Lowongan Pekerjaan
    </div>
    <div class="card-body">
     
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5"enctype="multipart/form-data">
          @method('put')
          @csrf
             
              <div class="mb-3">
                <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" 
                id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan', $post->nama_perusahaan) }}"required autofocus>
                @error('nama_perusahaan')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Profile Perusahaan</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3 col-sm-5 d-block">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" 
                      name="image">
                @else
                @endif      
                  @error('image')
                  <div class="idvalid-feedback">
                   {{ $message }}
                </div>  
              @enderror
            </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Perusahaan</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" 
                id="alamat" name="alamat" value="{{ old('alamat', $post->alamat) }}"required  >
                @error('alamat')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="tgl" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tgl') is-invalid @enderror" 
                id="tgl" name="tgl" value="{{ old('tgl', $post->tgl) }}"required  >
                @error('tgl')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text " class="form-control @error('no_hp') is-invalid @enderror" 
                id="no_hp" name="no_hp" value="{{ old('no_hp', $post->no_hp) }}"required  >
                @error('no_hp')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
                  <a href="/dashboard/posts"class="btn btn-secondary">Exit</a>
                  <button type="submit" class="btn btn-primary ">Update Postingan</button>
              
                
            </form>    
          </div>
        </div>
        
        @endsection






