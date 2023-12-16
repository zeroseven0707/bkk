@extends('dashboard.layouts.main')


 @section ('container')
 <div class="container bg-white ">
 
 <div class="container">
   <div class="row">
    <div class="container">
      <div class="row mt-3 mb-2">
    <h1 class="h3">Selamat Datang Di Website BKK, {{ auth()->user()->name }}</h1>
</div>
</div>
        @if ($dashboards->count())
     <div class="card mb-2  bg-light">      
       @if($dashboards[0]->image)
       <div style="max-height: 400px; overflow:hidden;">
         <img src="{{ asset('storage/' . $dashboards[0]->image) }}" 
         alt="{{ $dashboards[0]->body}}" class="img-fluid mt-2 card-img-top">
       </div>
       @endif
  
       <div class="card-body text-center">
        <h5 class="card-title">{{ $dashboards[0]->nama }}</h5>
        <p> 
          <small class="text-muted">
          {{ $dashboards[0]->created_at->diffForHumans( ) }}
        </small>
        </p>
        <p class="card-text">{{ $dashboards[0]->excerpt }}</p>
        <a href="/dashboards/{{ $dashboards[0]->id }}" class="btn btn-primary">Lihat Postingan</a>
      </div>
       </div>  

       <div class="container mb-3 mt-3">
        <div class="row">
            @foreach ($dashboards->skip(1) as $dashboard)
           
            <div class="col-md-4 ">
                <div class="card bg-light" style="">
                        @if($dashboard->image)
                            <img src="{{ asset('storage/' . $dashboard->image) }}" 
                          alt="{{ $dashboard->excerpt}}" class="img-fluid">
                        @endif
                    
                       
                    <div class="card-body">
                      <h5 class="card-title">{{ $dashboard->nama }}</h5>
                      <p> 
                        <small class="text-muted">
                        {{ $dashboard->created_at->diffForHumans( ) }}
                      </small>
                      </p>
                      <p class="card-text">{{ $dashboard->excerpt }}</p>
                      <a href="/dashboards/{{ $dashboard->id }}" class="btn btn-primary">Lihat Postingan</a>
                    </div>
                  </div>
            </div> 
           @endforeach            
        </div>
      </div>     
        @endif
  
         {{-- <div class="d-flex justify-content-end">
         {{ $posts->links() }}
       
       </div> --}}
     
   </div>
 </div>
</div>
<div class="d-flex justify-content-end">
  {{ $dashboards->links() }}
</div>
@endsection



    {{-- @foreach ($posts->skip(1) as $post)
    <article class="mb-5 border-bottom pb-4">
    <h2> <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

    <p>By <a href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}"
        class="text-decoration-none"> {{ $post->category->name }}</a></p>

    <p>  {{ $post->excerpt }} </p>

    <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more</a>

    </article>
    @endforeach --}}



