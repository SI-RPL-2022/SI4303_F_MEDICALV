@extends('layouts.bootstrap')

@section('title', 'Registrasi')

@section('content')

<section class="vh-600 medical-v-color-background" style="medical-v-color-background">
    <div class="container-fluid py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src={{ asset('assets/img/unsplash/orang-register.jpg') }}
                    alt="register form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%">
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <form action="registervol" method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <a class="navbar-brand medical-v-color-text" href="/home"><img src="{{ asset('assets/img/logo/Logo-Medical-V.png') }}" alt="logo-navbar" width="150"></a>
                        </div>
                    <br>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><b>Daftar</b></h5>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg  @error('email') is-invalid @enderror"  value="{{ old('email') }}" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="phone_number">Nomor Handphone</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" />
                        @error('phone_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="address">Alamat</label>
                        <input type="text" name="address" id="address" class="form-control form-control-lg @error('address') is-invalid @enderror" value="{{ old('address') }}" />
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="birth">Tanggal Lahir</label>
                        <input type="date" name="birth" id="birth" class="form-control form-control-lg @error('birth') is-invalid @enderror" value="{{ old('date') }}" />
                        @error('birth')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="sex">Jenis Kelamin</label>
                        <select class="form-select @error('sex') is-invalid @enderror" name="sex" aria-label="Default select example">
                            <option selected value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                        @error('sex')
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
                        <button class="btn btn-lg medical-v-color-background" type="submit" style="color: white">Daftar</button>
                    </div>
                    <p class="mb-5 pb-lg-2 medical-v-color-text">Sudah punya akun?
                        <a class="medical-v-color-text" href="/login">Login disini</a>
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