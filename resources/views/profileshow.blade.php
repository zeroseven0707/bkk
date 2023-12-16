@extends('dashboard.layouts.main')

@section('container')
      <div class="container">    
        <div class="contaner mt-3 mb-3">
            <a href="/dashboards"class="btn btn-secondary"><span data-feather="arrow-left"></span> Back To all My dashboard</a>           
        </div>
    <div class="container-fluid p-0">
      <form action="/update-profile/{{ $user->id }}" method="post" enctype="multipart/form-data">@csrf
           <div class="pt-5 text-center">
            <img src="/storage/{{  $user->image }}" class="rounded-circle img-thumbnail" alt="" width="250" height="250"><br>
            <input class="@error('image') is-invalid @enderror" type="file" id="image" name="image">
          </div>
             <table class="table table-striped mt-2" style="100%">
              <thead>
              <tr>
               <td>Nama</td>
              </tr>
            </thead>
              <tr>
               <th>
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                id="name" name="name" value="{{ old('name', $user->name) }}"required autofocus>
                @error('name')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
               </th>
              </tr>
              </table>   
             <table class="table table-striped mt-2" style="100%">
              <thead>
              <tr>
               <td>Nisn</td>
              </tr>
            </thead>
              <tr>
               <th>
                <input type="text" class="form-control @error('nisn') is-invalid @enderror" 
                id="nisn" name="nisn" value="{{ old('nisn', $user->nisn) }}"required>
                @error('nisn')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
               </th>
              </tr>
              </table>   
             <table class="table table-striped mt-2" style="100%">
              <thead>
              <tr>
               <td>alumni</td>
              </tr>
            </thead>
              <tr>
               <th>
                <input type="text" class="form-control @error('alumni') is-invalid @enderror" 
                id="alumni" name="alumni" value="{{ old('alumni', $user->alumni) }}"required>
                @error('alumni')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
               </th>
              </tr>
              </table>   
             <table class="table table-striped mt-2" style="100%">
              <thead>
              <tr>
               <td>NO HP</td>
              </tr>
            </thead>
              <tr>
                <th>
                  <input type="text" class="form-control @error('nohp') is-invalid @enderror" 
                id="nohp" name="nohp" value="{{ old('nohp', $user->nohp) }}"required>
                @error('nohp')
                <div class="idvalid-feedback">
                 {{ $message }}
                </div>
                @enderror
              </div>
                 </th>
              </tr>
              </table>   
              <div class="d-flex justify-content-end mt-3 mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
              
              </div>
            </form>
@endsection