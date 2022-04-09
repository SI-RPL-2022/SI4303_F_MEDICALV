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
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <form>
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3"><img src={{ asset('assets/img/logo/Logo-Medical-V.png') }} width="150"> </i>
                        </div>
                    <br>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><b>Login</b></h5>
                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example17" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example17">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example27" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example27">Password</label>
                    </div>
                    <div class="pt-1 mb-4">
                        <button class="btn btn-lg medical-v-color-background" type="button" style="color: white">Login</button>
                    </div>
                    <a class="small text-muted" href="#!">Lupa password?</a>
                    <p class="mb-5 pb-lg-2 medical-v-color-text">Belum punya akun?
                        <a class="medical-v-color-text" href="#!">Daftar disini</a>
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