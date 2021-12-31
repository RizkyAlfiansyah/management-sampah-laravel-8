<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src=""></script>

    <title>WEB MANAGEMENT SAMPAH</title>
  </head>
  <body>
      <div class="container mt-2" style="background-color: #E5E5E5;">
          <div class="row">
              <div class="col">
                <h1 class="text-center my-5 font-monospace fw-bold" style="color: #1C85A2;">WEB MANAGEMENT SAMPAH</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="row" style="color: aliceblue; background-color: #0C325F;">
                            <div class="col">
                                <h3 class="text-center py-3 col-12 fw-light fs-5" >{{$title}}</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center bg-light mb-3">
                            <form method="POST" class="px-4 pt-4">
                                @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                @csrf
                                <div class="form-floating mb-2">
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                                    <label for="email" class="form-label">Email address</label>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                                    <label for="password" class="form-label">Password</label>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-info p-3 shadow rounded-3 col-12 my-3 " style="color:aliceblue; background-color: #30AEE4;" >Login</button>
                                </div>
                            </form>
                            <small class="d-block text-center my-2">Not Registered ? <a href="/register">Register Now !</a></small>
                            <div class="col-12">                                
                                <div class="row justify-content-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </body>
</html>