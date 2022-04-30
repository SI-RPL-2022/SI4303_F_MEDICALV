<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrasi</title>

    <link rel="shortcut icon" href="{{ url('') }}/assets/images/fav.jpg">
    <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/style.css" />
</head>

<body>
    <div class="container-fluid h-100">

        <div class="row no-margin h-100">

            <div class="col-sm-12 no-padding login-box h-100">
                <div class="row no-margin w-100">
                   <div class="col-lg-6 col-md-6 box-de-regist">
                       <div class="small-logo">
                        <!-- <i class="fab fa-asymmetrik"></i> Style Login -->
                        <img src="{{ url('') }}/assets/images/logo2.png" width="150px">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 log-det">


                    <div class="text-box-cont">

                        <div class="menu-regist">
                            <p>Sudah menjadi Mitra<a href="{{ url('/login') }}" class="btn btn-menu btn-outline-success ml-3" style="float: right;margin-top:-10px;">Masuk</a></p>
                        </div>

                        <h2 class="mb-3">Daftar Organisasi</h2>

                        @if(session()->has('pesan'))
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{ session()->get('pesan') }}
                      </div>
                      @endif

                      <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_organisasi">Nama Organisasi</label>
                            <input type="text" name="nama_organisasi" class="form-control @error('nama_organisasi') is-invalid @enderror" value="{{ old('nama_organisasi') }}">
                            @error('nama_organisasi')
                            <div class="text-danger mb-3" style="margin-top: -20px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email_organisasi">Email</label>
                            <input type="text" name="email_organisasi" class="form-control @error('email_organisasi') is-invalid @enderror" value="{{ old('email_organisasi') }}">
                            @error('email_organisasi')
                            <div class="text-danger mb-3" style="margin-top: -20px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat_organisasi">Alamat Organisasi</label>
                            <textarea name="alamat_organisasi" class="form-control @error('alamat_organisasi') is-invalid @enderror">{{ old('nama_organisasi') }}</textarea>
                            @error('alamat_organisasi')
                            <div class="text-danger mb-3" style="margin-top: -20px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="text-danger mb-3" style="margin-top: -20px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')
                            <div class="text-danger mb-3" style="margin-top: -20px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="logo_organisasi">Foto</label>
                            <input type="file" name="logo_organisasi" class="form-control @error('logo_organisasi') is-invalid @enderror">
                            @error('logo_organisasi')
                            <div class="text-danger mb-3" style="margin-top: -20px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-login btn-success btn-block">Daftar</button>

                    </form>
                </div>

            </div>

        </div>
    </div>

</div>
</div>

</body>

<script src="{{ url('') }}/assets/js/jquery-3.2.1.min.js"></script>
<script src="{{ url('') }}/assets/js/popper.min.js"></script>
<script src="{{ url('') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ url('') }}/assets/js/script.js"></script>


</html>
