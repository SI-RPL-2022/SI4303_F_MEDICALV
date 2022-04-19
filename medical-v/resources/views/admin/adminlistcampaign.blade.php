<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <title>Medical - V</title>
    </head>
    <style>
        body {
            background-color: white;
        }

        .page .sidebar {
            height: 100vh;
            width: 18%;
            background-color: #6ab99e;
            top: 0;
            left: 0;
            position: fixed;
        }

        .page .content {
            margin-left: 18%;
        }

        .sidebar-header {
            padding: 3.5% 7%;
        }

        .sidebar-logo-container {
            margin-top: 5px;
            display: flex;
            text-align: center;
        }

        .logo-container {
            max-width: 100%;
            margin: 5%;
        }

        .logo-sidebar {
            width: 90%;
            height: auto;
        }

        .navigation-list {
            list-style-type: none;
            padding: 0% 3%;
            margin-top: 20%;
        }

        .navigation-list-item {
            padding: 3% 6% 3% 6%;
            border-radius: 8px;
            margin: 15px;
            align-items: center;
        }

        .navigation-list-item:hover {
            background: rgb(0, 0, 0, 0.05);
            box-shadow: 0 0 0.4em rgb (255, 255, 255, 0.1);
            cursor: pointer;
        }

        .navigation-list-item.active {
            background: rgb(0, 0, 0, 0.1);
            box-shadow: 0 0 0.4em rgb (255, 255, 255, 0.1);
        }

        .navigation-link {
            color: white;
            letter-spacing: 0.5px;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
                sans-serif;
            font-weight: 550;
            font-size: 13px;
            text-decoration: none;
        }

        .navigation-list-item:hover .navigation-link {
            color: rgb(255, 255, 255, 0.7);
        }

        .navigation-list-item.active .navigation-link {
            color: rgb(255, 255, 255, 0.8);
        }

        .navigation-link i {
            font-size: 21px;
        }

        .navigationBar {
            background-color: white;
            height: 50px;
            padding: 40px 0px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 0px 0px rgb(85, 85, 85, 0.1);
        }

        #dropdownMenuButton1 {
            margin-right: 80px;
            border: white;
            background-color: rgb(255, 255, 255);
        }

        .profile {
            margin-right: 5px;
            margin-left: 30px;
            height: 50px;
            width: 50px;
            border-radius: 50px;
        }

        .judulcontent {
            margin-top: 55px;
            margin-left: 53px;
            font-size: 35px;
            font-weight: 700;
        }

        .table {
            margin-top: 55px;
            margin-left: 53px;
            width: 90%;
            text-align: center;
        }

        .form {
            margin-left: 53px;
        }

        .form-label {
            margin-top: 5px;
        }

        .subjudul {
            font-size: 20px;
            font-weight: 700;
            margin-top: 20px;
        }
    </style>
    <body>
        <!-- Sidebar -->
        <div class="page">
            <div class="sidebar">
                <div class="sidebar-header">
                    <div class="sidebar-logo-container">
                        <div class="logo-container">
                            <img class="logo-sidebar" src="assets/Logo2.png" />
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
                                    <div class="col-10">Web Statistik</div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item active">
                            <a class="navigation-link" href="">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                    <div class="col-10">Daftar Campaign</div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item">
                            <a class="navigation-link" href="">
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
                        <button
                            class="btn btn-secondary dropdown-toggle text-dark"
                            type="button"
                            id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"
                        >
                            Admin
                            <img class="profile" src="public/assets/img/Logo3">
                        </button>
                        <ul
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton1"
                        >
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    >Another action</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    >Something else here</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Header -->
                <!-- Content -->
                <p class="judulcontent">Daftar Campaign</p>
                <table class="table table-success table-striped table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">ID Campaign</th>
                            <th scope="col">Nama Campaign</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tanggal Campaign</th>
                            <th scope="col">Lokasi Campaign</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Status Campaign</th>
                            <th scope="col">Status Verifikasi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($campaign as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nama_campaign}}</td>
                            <td>{{$row->kategori}}</td>
                            <td>{{$row->tgl_mulai_campaign}} s.d {{$row->tgl_selesai_campaign}} </td>
                            <td>{{$row->kecamatan}}, {{$row->kabupaten}}, {{$row->provinsi}} </td>
                            <td>{{$row->deskripsi}}</td>
                            <td><img src="/img/poster/{{$row->poster}}" alt="..." style="width: 200px"></td>
                            <td>{{$row->campaign_status}}</td>
                            <td>{{$row->verif_status}}</td>
                            <td>
                                <a href="/org/{{$row->id}}/edit">Edit Campaign</a>
                                <form action="/org/{{$row->id}}" method='POST' class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Close Campaign</button>
                            </td>
                        </tr>
    @endforeach
                    </tbody>
                </table>
                <!-- End Content -->
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
