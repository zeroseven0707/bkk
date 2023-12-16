@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Postingan Dashboard</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success col-lg-12" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="container">
    <div class="row">

    
  <div class="col-md-6">
        
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Data Dashboard</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="col-lg-12">             
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
                  name="image" required onchange="previewImage()">
                  @error('image')
                  <div class="idvalid-feedback">
                   {{ $message }}
                </div>  
              @enderror
            </div>
          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" required class="form-control  @error('title') is-invalid @enderror" 
            id="body" cols="30" rows="10" placeholder="ketik postingan" value="{{ old('body') }}"></textarea>
            @error('body')
            <div class="idvalid-feedback">
             {{ $message }}
            </div>
            @enderror
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create Dashboard</button>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="table-responsive col-lg-12">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Create New Dashboard
    </button>
    <a href="/dashboards"class="btn btn-warning"><span data-feather="eye"></span>Lihat Postingan</a>
    {{-- <a href="/dashboard/dashboards/create" class="btn btn-primary mb-3">Create New Dashboard</a> --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Body</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dashboards as $dashboard)
        <tr>
          <td>{{ $loop->iteration }}</td>  
          <td>{{ $dashboard->nama }}</td>
          <td>{{ $dashboard->excerpt }}</td>
          <td>
            <a href="/dashboard/dashboards/{{ $dashboard->id }}" class="badge bg-info">
              <span data-feather="eye"></span></a>

            <a href="/dashboard/dashboards/{{ $dashboard->id }}/edit" class="badge bg-warning">
            <span data-feather="edit"></span></a>

            <form action="/dashboard/dashboards/{{ $dashboard->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0"
               onclick="return confirm('Apakah Anda Ingin Meng Hapus nya?')"><span data-feather="x-circle"></span></button>
              </form>
          </td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-end mt-3 mb-3">
      {{ $dashboards->links() }}
    </div>
  </div>

    </div>
  </div>

@endsection


