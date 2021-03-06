@extends('layouts.app')

@section('title', 'Cari Campaign')

@section('content')
    <div class="container">
        <h2 class="mb-5">
            <b>Telusuri Campaign</b>
        </h2>
        <div class="row">
            <div class="col">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <div class="col-1">
                <div class="dropdown">
                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Anak-Anak</a></li>
                        <li><a class="dropdown-item" href="#">Remaja</a></li>
                        <li><a class="dropdown-item" href="#">Lansia</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1">
                <a class="btn medical-v-color-background" href="#" style="color: white; width: 100%">Cari</a>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($campaign as $row)
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/img/poster/{{ $row->poster }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $row->nama_campaign }}</b></h5>
                            <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>{{ $row->kategori }}</button>
                            <p class="card-text mt-4">
                                <i class="fa-solid fa-circle"></i>  {{ $row->kabupaten }}, {{ $row->provinsi }}
                            </p>
                            <p class="card-text">
                                <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  {{ $row->tgl_mulai_campaign }} - {{ $row->tgl_selesai_campaign }}
                            </p>
                            <p class="card-text mt-5" style="color: red"><b>Pendaftaran dibuka hingga {{ $row->tgl_selesai_pendaftaran }}</b></p>
                            <a href="/detailcampaign/{{ $row->id }}" class="btn btn-lg medical-v-color-background" style="color: white">Lihat selengkapnya</a>
                            <form action="campaignfavorit" method="post">
                                @csrf
                                <input type="hidden" name="campaign_id" value="{{ $row->id }}">
                                <button type="submit" class="btn btn-outline-success mt-4">Jadikan Favorit</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection