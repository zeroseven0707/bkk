@extends('dashboard.layouts.main')


 @section ('container')
 <div class="container bg-white">
 
 <div class="container mb-3 mt-3">
   <div class="row">
       <div class="container">
        <div class="row">  
            <div class="col-md-4 mb-3">
                <div class="card p-5 p-md-3 border rounded-3 bg-light" style="">
                  <div class="container-fluid p-0">
                            <img src="{{ asset('storage/' . Auth::user()->image) }}" 
                          alt="{{ Auth::user()->name}}" class="img-fluid mt-3 bd-placeholder-img rounded-circle img-thumbnail card-img-top" alt="" width="140" height="140">                    
                        <div class="card-body">
                      <h5 class="card-title">{{ Auth::user()->name }}</h5>
                      <p> 
                        <small class="text-muted">
                        {{ Auth::user()->created_at->diffForHumans( ) }}
                      </small>
                      </p>
                      {{-- <p class="card-text">{{ $profile->info }}</p> --}}
                      <a href="/profiles/{{ Auth::user()->id }}" class="btn btn-primary">Lihat Profile</a>
                    </div>
                  </div>
                  </div>
            </div>         
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection





