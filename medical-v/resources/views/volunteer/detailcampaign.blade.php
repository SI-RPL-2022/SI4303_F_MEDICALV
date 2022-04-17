@extends('layouts.app')

@section('title', 'Detail Campaign')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <img src="{{ asset('assets/img/unsplash/kids-health.jpg') }}" style="width: 100%">
            </div>
            <div class="col">
                <h1><b>Nama Campaign</b></h1>
                <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>Anak-Anak</button>
                <p class="mt-5">
                    <i class="fa-solid fa-circle"></i>  Kab. Banyumas, Jawa Tengah
                </p>
                <p>
                    <i class="fa-solid fa-circle"></i>  12 April - 12 Mei 2022
                </p>
                <p>
                    <i class="fa-solid fa-circle"></i>  Bandung Health Community
                </p>
                <p class="mt-5" style="color: red"><b>Pendaftaran ditutup 5 hari lagi</b></p>
                <a href="/registcampaign" class="btn btn-lg medical-v-color-background" style="color: white">Daftar Campaign</a>
            </div>
        </div>
        <hr class="mt-4">
        <h3 class="mt-3">
            <b>Deskripsi</b>
        </h3>
        <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis a sem sit 
            amet condimentum. Nunc metus elit, vehicula eget ligula at, scelerisque lacinia odio. 
            Vivamus commodo sapien eu varius egestas. Pellentesque fermentum nulla id nunc vulputate ullamcorper. 
            Nunc in venenatis nisi, tristique vestibulum turpis.
        </p>
    </div>
@endsection