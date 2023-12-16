<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
  <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-primary" href="#">APLIKASI BKK</a>
    <button class="navbar-toggler position-absolute  d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>
  
  <div class="container">
    <div class="row mt-5">   
  <div class="row justify-content-center">
      <div class="col-md-5">
  
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @endif
          <div class="container">
          <main class="form-signin">
              
              <form action="/" method="post" class="p-5 p-md-3 border rounded-3 bg-light">
                @csrf
                <div class="mb-3">
                <h3 class="fw-normal text-center">Please Login!</h3>
                </div>
                <div class="form-floating mt-1">
                  <input type="email" name="email" class="form-control  @error('email') is-invalid
                  @enderror" id="email" placeholder="name@example.com" value="{{ old('email')  }}"required autofocus>
                  <label for="email" >Email address</label>
                  @error('email')
                  <div class="idvalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating mt-1">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
                <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now!</a></small>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                <hr class="my-4">
                <small class="text-muted">By clicking Login up, you agree to the terms of use.</small>
              </form>
              

              
            </main>
  
      </div>
  </div>
</div>
</div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" 
            crossorigin="anonymous"></script>
</body>
</html>