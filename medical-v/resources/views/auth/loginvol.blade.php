@extends('layouts.bootstrap')

@section('title', 'Login')

@section('content')

<section class="vh-100 medical-v-color-background" style="medical-v-color-background">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src={{ asset('assets/img/unsplash/orang-login.jpg') }}
                    alt="loginvol form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="loginvol" method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <a class="navbar-brand medical-v-color-text" href="/home"><img src="{{ asset('assets/img/logo/Logo-Medical-V.png') }}" alt="logo-navbar" width="150"></a>
                        </div>
                    <br>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><b>Login</b></h5>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg  @error('email') is-invalid @enderror"  value="{{ old('email') }}" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pt-1 mb-4">
                        <button class="btn btn-lg medical-v-color-background" type="submit" style="color: white">Login</button>
                    </div>
                    <p class="mb-5 pb-lg-2 medical-v-color-text">Belum punya akun?
                        <a class="medical-v-color-text" href="/register">Daftar disini</a>
                    </p>
                    </form>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection