@extends('dashboard.layouts.main')

@section('container')


  <div class="text-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Pencarian User Aplikasi BKK</h1>
    </div>
    <div class="container pt-3 pb-2 mb-3">
      <a href="/user"class="btn btn-success"><span data-feather="arrow-left"></span>Back To all My User</a>
      </div>
    <div class="table-responsive col-lg-24">
      <table class="table table-striped-columns table-bordered table-sm" >
        <thead class="table-dark">
          <tr>
            <th scope="col"> No </th>
            <th scope="col"> Foto </th>
            <th scope="col"> Name </th>
            <th scope="col"> Username </th>
            <th scope="col"> Email </th>
            <th scope="col"> No hp </th>
            <th scope="col"> Tanggal Pembuatan Akun </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{ asset('storage/'.$user->image) }}" width="70" alt=""></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->nohp }}</td>
            <td>{{ $user->created_at }}</td>
          </tr>
              
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endsection







