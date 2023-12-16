@extends('dashboard.layouts.main')

@section('container')

<div class="text-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang Di Website Progres Ticket, {{ auth()->user()->name }}</h1>
  </div>
 <div class="container">
  <div class="row">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img.telkom/telkom1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img.telkom/telkom2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img.telkom/telkom3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>
 </div>
@endsection