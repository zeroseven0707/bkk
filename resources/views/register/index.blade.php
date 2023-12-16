<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
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
  <div class="container ">
    <div class="row mt-5">
      <div class="row justify-content-center">
          <div class="col-lg-5">
              <main class="form-registration">
                <form action="/register" method="post" class="p-5 p-md-3 border rounded-3 bg-light" enctype="multipart/form-data">
                  @csrf
                  <h1 class="h3 mb-3 fw-normal text-center">Registration Form!</h1>
                    <div class="container">
                      <div class="form-floating mt-2">
                        <input type="file" name="image" class="form-control rounded-top @error('image') is-invalid
                         @enderror" id="image" required autofocus value="{{ old('image') }}">
                        <label for="image">Foto Profile</label>
                        @error('image')
                        <div class="idvalid-feedback">
                         {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-floating mt-1">
                          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid
                           @enderror" id="name" placeholder="Name" required autofocus value="{{ old('name') }}">
                          <label for="name">Name</label>
                          @error('name')
                          <div class="idvalid-feedback">
                           {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-floating mt-1">
                          <label for="nisn" class="form-label"></label>
                          <input type="text" class="form-control @error('nisn') is-invalid @enderror" 
                          id="nisn" name="nisn" placeholder="nisn" value="{{ old('nisn') }}"required  >
                          <label for="nisn">nisn</label>
                          @error('nisn')
                          <div class="idvalid-feedback">
                           {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-floating mt-1">
                          <label for="alumni" class="form-label"></label>
                          <input type="text" class="form-control @error('alumni') is-invalid @enderror" 
                          id="alumni" name="alumni" placeholder="alumni" value="{{ old('alumni') }}"required  >
                          <label for="alumni">alumni</label>
                          @error('alumni')
                          <div class="idvalid-feedback">
                           {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-floating mt-1">
                          <input type="text" name="username" class="form-control @error('username') is-invalid
                          @enderror" id="username" placeholder="Username" required value="{{ old('username')  }}">
                          <label for="username">Username</label>
                          @error('username')
                          <div class="idvalid-feedback">
                           {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-floating mt-1">
                          <label for="nohp" class="form-label"></label>
                          <input type="text" class="form-control @error('nohp') is-invalid @enderror" 
                          id="nohp" name="nohp" placeholder="nohp" value="{{ old('nohp') }}"required autofocus >
                          <label for="nohp">No Hp</label>
                          @error('nohp')
                          <div class="idvalid-feedback">
                           {{ $message }}
                          </div>
                          @enderror
                        </div>
                    <div class="form-floating mt-1">
                      <input type="email" name="email" class="form-control @error('email') is-invalid
                      @enderror" id="email" placeholder="name@example.com" required value="{{ old('email')  }}">
                      <label for="email">Email address</label>
                      @error('email')
                          <div class="idvalid-feedback">
                           {{ $message }}
                          </div>
                          @enderror
                    </div>
                     <div class="form-floating mt-1">
                      <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid
                      @enderror" id="password" placeholder="Password" required>
                      <label for="password">Password</label>
                      @error('password')
                          <div class="idvalid-feedback">
                           {{ $message }}
                          </div>
                          @enderror
                    </div>
                    
                    <small class="d-block text-center mt-3 ">Already Register? <a href="/">Login</a></small>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    <hr class="my-4">
                    <small class="text-muted"> By clicking Registration up, you agree to the terms of use.</small>
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
