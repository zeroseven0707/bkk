@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="h2">Haloo, {{ auth()->user()->name }}</h1>
        
            <a href="/dashboard/dashboards"class="btn btn-success"><span data-feather="arrow-left"></span> Back To all My dashboards</a>
            <a href="/dashboard/dashboards/{{ $dashboard->id }}/edit"class="btn btn-warning"><span data-feather="edit"></span> Edit </a>
            <form action="/dashboard/dashboards/{{ $dashboard->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger "
                 onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
                @if ($dashboard->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $dashboard->image) }}" 
                          alt="{{ $dashboard->body}}" class="img-fluid mt-3">
                </div>
                @endif
                <h6 class="card-title">{{ $dashboard->nama }}</h6>
                    <h3 class="card-title">{{ $dashboard->excerpt }}</h3>
                
                
        
        <article class="my-3 fs-5x">
         {!! $dashboard->body !!}
        </article>
        </div>
    </div>
</div>

@endsection