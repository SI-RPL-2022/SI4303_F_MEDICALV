@extends('layouts.app')

@section('title', 'Campaign Favorit')

@section('content')
    <div class="container">
        <h2><b>Campaign Favorit</b></h2>
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card">
                    {{-- @if(auth()->user()->campaign_id != null) --}}
                    <img src="{{ asset('assets/img/unsplash/kids-health.jpg') }}" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Relawan Cegah Stunting Desa Bangselok</b></h5>
                        <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>Anak-anak</button>
                        <p class="card-text mt-4">
                            <i class="fa-solid fa-circle"></i>  Sumenep, Jawa Timur
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  12 Juni s/d 13 Juni
                        </p>
                        <a href="#" class="btn btn-lg medical-v-color-background" style="color: white">Lihat selengkapnya</a>
                        <button type="submit" class="btn btn-danger mt-4">Hapus dari favorit</button>
                        {{-- @else
                        <div></div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection