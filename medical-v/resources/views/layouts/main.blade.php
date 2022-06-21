<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/style1.css') }}"></link>
    <link rel="icon" href="{{ URL::asset('assets/img/Logo3.png') }}"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <title>Medical - V</title>
  </head>
  <body>
    <!-- Sidebar -->
    <div class="page">
      <div class="sidebar">
        <div class="sidebar-header">
          <div class="sidebar-logo-container">
            <div class="logo-container">
              <img class="logo-sidebar" src="{{ URL::asset('assets/img/logo/Logo2.png') }}"/>
            </div>
          </div>
        </div>
        <div class="sidebar-body">
          <ul class="navigation-list">
          <li class="navigation-list-item">
              <a class="navigation-link" href="">
                <div class="row">
                  <div class="col-2">
                    <i class="fa-solid fa-circle-plus"></i>
                  </div>
                  <div class="col-10">Dashboard</div>
                </div>
              </a>
            </li>
            <li class="navigation-list-item">
              <a class="navigation-link" href="/indexdaftarcampaignadmin">
                <div class="row">
                  <div class="col-2">
                    <i class="fa-solid fa-circle-plus"></i>
                  </div>
                  <div class="col-10">Daftar Campaign</div>
                </div>
              </a>
            </li>
            <li class="navigation-list-item">
              <a class="navigation-link" href="/daftarorganisasiadmin">
                <div class="row">
                  <div class="col-2">
                    <i class="fa-solid fa-circle-plus"></i>
                  </div>
                  <div class="col-10">Daftar Organisasi</div>
                </div>
              </a>
            </li>
            <li class="navigation-list-item">
              <a class="navigation-link" href="/daftarvolunteeradmin">
                <div class="row">
                  <div class="col-2">
                    <i class="fa-solid fa-circle-plus"></i>
                  </div>
                  <div class="col-10">Daftar Volunteer</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End Sidebar -->
      <!-- Header -->
      <div class="content">
        <div class="navigationBar">
          <div class="dropdown ms-auto ml-3">
            <button class="btn btn-secondary dropdown-toggle text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
              Admin
              <img class="profile" src="{{ URL::asset('assets/img/unsplash/IAR2.png') }}" />
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
        <!-- End Header -->
        <!-- Content -->
        <div style="margin: 40px; margin-left: 80px;">
          @yield('content')
        </div>
        <!-- End Content -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>
