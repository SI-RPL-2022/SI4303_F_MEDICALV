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
                    <form>
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3"><img src={{ asset('assets/img/logo/Logo-Medical-V.png') }} width="150"> </i>
                        </div>
                    <br>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><b>Daftar</b></h5>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="text" id="nama" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="tgl">Tanggal Lahir</label>
                        <input type="date" id="tgl" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="gender">Jenis Kelamin</label>
                        <input type="text" id="gender" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="konfirm_password">Konfirmasi Password</label>
                        <input type="password" id="konfirm_password" class="form-control form-control-lg" />
                    </div>
                    <div class="pt-1 mb-4">
                        <button class="btn btn-lg medical-v-color-background" type="button" style="color: white">Daftar</button>
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