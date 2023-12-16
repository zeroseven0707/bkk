@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
          <a href="/dashboards"class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back To All My Postingan</a>

          <h2 class="">Haloo, {{ auth()->user()->name }}</h2>
                  
                @if ($dashboard->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $dashboard->image) }}" 
                           class="img-fluid mt-2">
                </div>
                @endif
                <div class="card-body">
                    <h6 class="card-title">{{ $dashboard->nama }}</h6>
                    <p> 
                      <small class="text-muted">
                      {{ $dashboard->created_at->diffForHumans( ) }}
                    </small>
                    </p>
                    <h3 class="card-title">{{ $dashboard->excerpt }}</h3>
              
                
        <article class="my-3 fs-5x">

        {!! $dashboard->body !!}
        </article>
        </div>
      </div>
    </div>
</div>

@endsection