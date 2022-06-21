<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <title>Medical V</title>
</head>

<body>
    <div class="page-dashboard">
        <div class="row">
            <div class="d-flex" id="wrapper">
                <!-- sidebar -->
                <div class="col-lg-2">
                    <div class="sidebar">
                        <h3 class="text-center mt-4 mb-4 fw-bold" style="color: white">
                            <a class="group">
                                <img src="{{ asset('assets/img/logo/love (1) 1.png') }}" class="main-logo" alt="" />
                                <span class="text-group">MEDICAL - V</span>
                            </a>
                        </h3>
                        <ul>
                            <li>
                                <a class="group">
                                    <object data="./icons8_filled_circle.svg" width="25px" type=""
                                        class="icon"></object>
                                    <span class="text-group">Web Statistik</span>
                                </a>
                            </li>
                            <li>
                                <!-- <p>Daftar Campaign</p> -->
                                <a class="group">
                                    <object data="./icons8_filled_circle.svg" width="25px" type=""
                                        class="icon"></object>
                                    <span class="text-group">Daftar Campaign</span>
                                </a>
                            </li>
                            <li>
                                <a class="group">
                                    <object data="./icons8_filled_circle.svg" width="25px" type=""
                                        class="icon"></object>
                                    <span class="text-group">Daftar Volunteer</span>
                                </a>
                            </li>
                            <li>
                                <a class="group">
                                    <object data="./icons8_filled_circle.svg" width="25px" type=""
                                        class="icon"></object>
                                    <span class="text-group">Kategori Campaign</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- page-content -->
                <div class="container d-flex">
                    <div class="card" style="width: 18rem; height: 8rem; margin: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Campaign</h5>
                            <h1 class="card-text">{{ $campaign }}</h1>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; height: 8rem; margin: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Volunteer</h5>
                            <h1 class="card-text">{{ $vol_account }}</h1>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; height: 8rem; margin: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Campaign Berjalan</h5>
                            <h1 class="card-text">{{ $campaign_selesai }}</h1>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; height: 8rem; margin: 15px;">
                        <div class="card-body">
                            <h5 class="card-title">Campaign Progress</h5>
                            <h1 class="card-text">{{ $campaign_berjalan }}</h1>
                        </div>
                    </div>
                </div>

                {{-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script> --}}
                <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous">
                </script>
</body>

</html>
