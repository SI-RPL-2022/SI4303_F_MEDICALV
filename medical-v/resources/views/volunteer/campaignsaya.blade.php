@extends('layouts.app')

@section('title', 'Campaign Saya')

@section('content')
    <div class="container">
        <h2><b>Campaign Saya</b></h2>
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card">
                    <img src="{{ asset('assets/img/unsplash/kids-health.jpg') }}" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Nama Campaign</b></h5>
                        <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>Anak-anak</button>
                        <p class="card-text mt-4">
                            <i class="fa-solid fa-circle"></i>  Kab. Sumenep, Jawa Timur
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  12 April - 12 Mei 2022
                        </p>
                        <p class="card-text medical-v-color-text mt-5">
                            Sedang diikuti
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection