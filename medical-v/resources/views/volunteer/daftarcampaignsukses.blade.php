@extends('layouts.app')

@section('title', 'Detail Campaign')

@section('content')
    <div class="container mt-4">
            <div class="row">
                <h1 class="mb-5"><b>Pendaftaran Campaign Berhasil!</b></h1>
                <div class="col">
                    <img src="{{ asset('assets/img/unsplash/kids-health.jpg') }}" style="width: 100%">
                </div>
                <div class="col">
                    <h2><b>Nama Campaign</b></h2>
                    <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>Anak-anak</button>
                    <p class="mt-5">
                        <i class="fa-solid fa-circle"></i>  Kab. Sumenep, Jawa Timur
                    </p>
                    <p>
                        <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  12 April - 12 Mei 2022
                    </p>
                    <p>
                        <i class="fa-solid fa-circle"></i>  Sumenep Health Care
                    </p>
                    <a href="/campaignsaya" class="btn btn-lg medical-v-color-background mt-5" style="color: white; width: 100%">Lihat Campain Saya</a>
                </div>
            </div>
    </div>
@endsection