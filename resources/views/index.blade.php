@extends('app')

@section('title', 'Home')

@section('content')

<div class="row justify-content-center">
    <div class="col-4">
        <div class="row" style="color: aliceblue; background-color: #0C325F;">
            <div class="col">
                <h3 class="text-center py-3 col-12 fw-light fs-5" >{{$title}}</h3>
            </div>
        </div>
        <div class="row justify-content-center bg-light mb-3">
            @if (session()->has('login'))
            <div class="justify-content-center pt-2">
                <div class="alert alert-success alert-dismissible fade show justify-content-center px-4 pt-2" role="alert">
                   {{ session('login') }} {{ auth()->user()->name }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
            @auth
            <div id="fetch-data">                                
            </div>
            @else
            <h4 class="text-center p-4">Silahkan Login Untuk Melihat Data!</h4>
            @endauth
            <div class="col-12">                                
                <div class="row justify-content-center">
                    <div class="col-12">
                        @auth
                        <button type="button" class="btn btn-info p-3 shadow rounded-3 col-12 my-2 " style="color:aliceblue; background-color: #30AEE4;" onClick="create()" >Tambah</button>
                        <form action="/logout" method="POST">
                        @csrf
                            <button type="submit" class="btn btn-info p-3 shadow rounded-3 col-12 my-2 " style="color:aliceblue; background-color: #30AEE4;">Logout   
                            </button>
                        </form>
                        @else
                        <form action="/login" method="get">
                            <button type="submit" class="btn btn-info p-3 shadow rounded-3 col-12 my-2 " style="color:aliceblue; background-color: #30AEE4;">Login</div>
                        </form>
                        @endauth
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

<script src="{{ asset('/js/main.js') }}"></script>

@endpush