@extends('layouts.app')

@section('title', 'Campaign Favorit')

@section('content')
    <div class="container">
        <h2><b>Campaign Favorit</b></h2>
        <div class="row mt-5">
            @foreach (Auth::user()->campaigns as $row)
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
                                @method('delete')
                                <input type="hidden" name="campaign_id" value="{{ $row->id }}">
                                <button type="submit" class="btn btn-danger mt-4">Hapus dari favorit</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection