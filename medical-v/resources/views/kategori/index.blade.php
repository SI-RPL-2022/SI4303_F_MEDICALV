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

    <title>Hello, world!</title>
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
                <div class="col-lg-10">
                    <div class="header d-flex shadow p-3 mb-5 bg-body rounded">
                        <div class="account ms-auto">
                            <object data="./icons8_filled_circle.svg" width="40px" type=""></object>
                        </div>
                    </div>

                    <div class="container content d-flex flex-column">
                        <h2>Kategori</h2>
                        <div class="card">
                            <div class="card-header">
                                Data Kategori
                            </div>
                            <div id="read"></div>
                        </div>

                        <!-- Button Tambah Kategori -->
                        <div class="button-section d-flex">
                            <button type="button" style="margin-left: 30px; background-color: aquamarine" class="btn btn-custom mt-4 modal-btn"
                                onclick="create()">
                                Tambahkan Kategori
                            </button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="tambah-kategori" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header mt-3 mb-0">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="halaman-create" class="p-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete -->
                    <div class="modal" tabindex="-1" id="hapus-data">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header m-3">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Apakah Anda Yakin Akan Menghapus data?</p>
                          </div>
                          <div class="modal-footer"></div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script> --}}
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            read()
        });

        //Read Data from Database
        function read() {
            $.get("{{ url('read') }}", {}, function (data, status) {
                $("#read").html(data);
            });
        }
        //Load Page Add Kategori
        function create() {
            $.get("{{ url('create') }}", {}, function (data, status) {
                $("#exampleModalLabel").html('Tambah Kategori')
                $("#halaman-create").html(data);
                $("#tambah-kategori").modal('show');
            });
        }

        // For Edit Page show
        function show(kode_kategori) {
            $.get("{{ url('show') }}/" + kode_kategori, {}, function (data, status) {
                $("#exampleModalLabel").html('Edit Kategori')
                $("#halaman-create").html(data);
                $("#tambah-kategori").modal('show');
            });
        }

        //Store Data Kategori
        function store() {
            var kategori = $("#kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('store') }}",
                data: "kategori=" + kategori,
                success: function (data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }

        //store update data kategori
        function update(kode_kategori) {
            var kategori = $("#kategori").val();
            $.ajax({
                type: "get",
                url: "{{ url('update') }}/" + kode_kategori,
                data: "kategori=" + kategori,
                success: function (data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }

        //Delete Data kategori
        function destroy(kode_kategori) {
            $.ajax({
                type: "get",
                url: "{{ url('destroy') }}/" + kode_kategori,
                success: function (data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }

      //Show Delete Data Alert
      function hapus(kode_kategori){
          $.get("{{ url('hapus') }}/" + kode_kategori, {}, function (data, status) {
                $(".modal-footer").html(data);
                $("#hapus-data").modal('show');
            });
      }
    </script>
</body>
</html>
