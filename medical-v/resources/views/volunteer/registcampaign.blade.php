@extends('layouts.app')

@section('title', 'Regist Campaign')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <form action="registcampaign/{{ $campaign->id }}">
                    @csrf
                    <h2><b>Pendaftaran Campaign</b></h2>
                    <div class="form-outline mb-4 mt-5">
                        <label class="form-label" for="nama"><b>Nama</b></label>
                        <input type="text" id="nama" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <label class="form-label" for="email"><b>Email</b></label>
                        <input type="email" id="email" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <label class="form-label" for="nama"><b>Alamat</b></label>
                        <input type="text" id="alamat" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <label class="form-label" for="nama"><b>No. Telepon</b></label>
                        <input type="text" id="notelp" class="form-control form-control-lg" />
                    </div>
                </form>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Saya berkomitmen untuk mengikuti campaign hingga akhir dan menjunjung nilai-nilai kemanusiaan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Saya menyetujui syarat dan ketentuan yang ditetapkan oleh penyelenggara
                    </label>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" class="btn btn-lg medical-v-color-background" style="color: white; width: 100%">Daftar Campaign</a>
                </div>
            </div>
            <div class="col-sm-6">
                    <div class="card">
                        <img src="/img/poster/{{ $campaign->poster }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $campaign->nama_campaign }}</b></h5>
                            <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>{{ $campaign->kategori }}</button>
                            <p class="card-text mt-4">
                                <i class="fa-solid fa-circle"></i>  {{ $campaign->kabupaten }}, {{ $campaign->provinsi }}
                            </p>
                            <p class="card-text">
                                <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  {{ $campaign->tgl_mulai_campaign }} s/d {{ $campaign->tgl_selesai_campaign }}
                            </p>
                            <p class="card-text mt-5" style="color: red"><b>Pendaftaran dibuka hingga {{ $campaign->tgl_selesai_pendaftaran }}</b></p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection