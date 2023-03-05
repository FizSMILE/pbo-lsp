@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <img src="{{ ('img/smkn2.png') }}" class="img-fluid rounded mb-3" width="150px" alt="">
        <div class="mb-2">
            SELAMAT DATANG DI ADMIN TECHNOPARK GALLERY <br> SMKN 2 BANJARMASIN
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    {{-- ISI BODY --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3 justify-content-center">    
                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3 justify-content-center">    
                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-0 m-auto">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary col-md-12">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-md-6">
                                   <a href="{{ route('register') }}" class="btn btn-primary col-md-12" role="button">Register</a>
                                </div>
                                
                            </div>
                        </form>
                    {{-- TUTUP BODY --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
