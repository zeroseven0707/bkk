@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">INPUT POSTINGAN DASHBOARD</h1>
  </div>
 

<div class="col-lg-8">

    <form method="post" action="/dashboard/dashboards/" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Penulis</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" 
          id="nama" name="nama" placeholder="nama" value="{{ old('nama') }}" required autofocus >
          @error('nama')
          <div class="idvalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Foto Dashboard</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" 
            name="image" onchange="previewImage()">
           
            @error('image')
            <div class="idvalid-feedback">
             {{ $message }}
          </div>  
        @enderror
      </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea name="body" class="form-control  @error('title') is-invalid @enderror" 
      id="body" cols="30" rows="10" placeholder="ketik postingan" value="{{ old('body') }}"></textarea>
      @error('body')
      <div class="idvalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
              
        <button type="submit" class="btn btn-primary">Create Dashboard</button>
      </form>
    </div>


@endsection




