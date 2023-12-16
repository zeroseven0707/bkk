@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Postingan Dashboard</h1>
  </div>
 
  <div class="card mb-2 col-md-6">
  <div class="bg-white">
  <div class="card-header bg-primary text-white">
      <i class="fas fa-table me-1"></i>
      Edit Postingan Dashboard
  </div>
  <div class="card-body">
    <form method="post" action="/dashboard/dashboards/{{ $dashboard->id }}" class="mb-5"enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" 
      id="nama" name="nama"  value="{{ old('nama', $dashboard->nama) }}"required autofocus >
      @error('nama')
      <div class="idvalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Dashboard Image</label>
      <input type="hidden" name="oldImage" value="{{ $dashboard->image }}">
      @if($dashboard->image)
      <img src="{{ asset('storage/' . $dashboard->image) }}" class="img-fluid mb-3 col-sm-5 d-block">
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
      <label for="body" class="form-label">Body</label>
      <textarea name="body" class="form-control  @error('title') is-invalid @enderror" 
      id="body" cols="30" rows="10">{{ $dashboard->body }}</textarea>
      @error('body')
      <div class="idvalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    
          
    <a href="/dashboard/dashboards"class="btn btn-success"><span data-feather="arrow-left"></span> Back To all My Dashboard</a>
        <button type="submit" class="btn btn-primary">Update Postingan</button>
      </form>

      
        </div>
      </div>
    </div>

@endsection






