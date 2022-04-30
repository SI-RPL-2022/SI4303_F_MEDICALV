<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>

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
         <div class="col-lg-6 col-md-6 box-de-login">
           <div class="small-logo">
            <!-- <i class="fab fa-asymmetrik"></i> Style Login -->
            <img src="{{ url('') }}/assets/images/logo2.png" width="150px">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 log-det">


          <div class="text-box-cont">

            <div class="menu-login">
              <a href="{{ url('/register') }}" class="btn btn-menu btn-outline-success" style="float: right;">Gabung Menjadi Partner</a>
            </div>

            <h2 class="mb-3">Masuk Organisasi</h2>

            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session()->get('error') }}
            </div>
            @endif

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session()->get('success') }}
            </div>
            @endif

            <form action="{{ url('/login') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="email_organisasi">Email</label>
                <input type="text" name="email_organisasi" class="form-control @error('email_organisasi') is-invalid @enderror">
                @error('email_organisasi')
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
              <p>
                <a href="">forget password ?</a></p>

                <button class="btn btn-login btn-success btn-block">Masuk</button>
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
