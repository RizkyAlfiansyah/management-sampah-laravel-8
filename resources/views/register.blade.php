@extends('app')

@section('title', 'Register')

@section('content') 
<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="row" style="color: aliceblue; background-color: #0C325F;">
            <div class="col">
                <h3 class="text-center py-3 col-12 fw-light fs-5" >{{$title}}</h3>
            </div>
        </div>
        <div class="row justify-content-center bg-light mb-3">
            <form action="/register" method="POST" class="px-4 pt-4">
                @csrf
                <div class="form-floating mb-1">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name" class="form-label">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- <div class="form-floating mb-1">
                    <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username" class="form-label">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> --}}
                <div class="form-floating mb-1">
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
                    <button type="submit" class="btn btn-info p-3 shadow rounded-3 col-12 my-3 " style="color:aliceblue; background-color: #30AEE4;" >Register</button>
                </div>
            </form>
            <small class="d-block text-center my-2">Already Registered ? <a href="/login">Login Now !</a></small>
            <div class="col-12">                                
                <div class="row justify-content-center">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection