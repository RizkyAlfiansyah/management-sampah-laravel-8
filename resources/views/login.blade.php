@extends('app')

@section('title', 'Login')

@section('content')
    
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
@endsection