@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
        <h1 class="mb-3"> {{ $post->nama_perusahaan}}  </h1>
        
            <a href="/post"class="btn btn-success"><span data-feather="arrow-left"></span> Back To all My Lowongan Pekerjaan</a>
           
                
                @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" 
                          alt="{{ $post->nama_perusahaan }}" class="img-fluid mt-3">
                </div>
                @else
                 
                 <img src="https://source.unsplash.com/1200x400?{{ $post->alamat }}" 
                      alt="{{ $post->no_hp }}" class="img-fluid mt-3">
                @endif

       
        
        <article class="my-3 fs-5x">

        {!! $post->nama_perusahaan !!}
        </article>
        </div>
    </div>
</div>

@endsection