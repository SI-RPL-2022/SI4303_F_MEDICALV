<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style1.css" />
    <link rel="icon" href="assets/img/Logo3.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Medical - V</title>
  </head>
  <body>
    <!-- Sidebar -->
    <div class="page">
      <div class="sidebar">
        <div class="sidebar-header">
          <div class="sidebar-logo-container">
            <div class="logo-container">
              <img class="logo-sidebar" src="assets/img/logo/Logo2.png" />
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
                  <div class="col-10">Campaign Saya</div>
                </div>
              </a>
            </li>
            <li class="navigation-list-item active">
              <a class="navigation-link" href="">
                <div class="row">
                  <div class="col-2">
                    <i class="fa-solid fa-circle-plus"></i>
                  </div>
                  <div class="col-10">Buat Campaign Baru</div>
                </div>
              </a>
            </li>
            <li class="navigation-list-item">
              <a class="navigation-link" href="">
                <div class="row">
                  <div class="col-2">
                    <i class="fa-solid fa-circle-plus"></i>
                  </div>
                  <div class="col-10">Data Volunteer</div>
                </div>
              </a>
            </li>
            <li class="navigation-list-item">
              <a class="navigation-link" href="">
                <div class="row">
                  <div class="col-2">
                    <i class="fa-solid fa-circle-plus"></i>
                  </div>
                  <div class="col-10">Laporan Volunteer</div>
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
              Campaign Saya
              <img class="profile" src="assets/img/unsplash/IAR2.png" />
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
