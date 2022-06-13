@extends('layouts.app')

@section('title', 'Campaign Saya')

@section('content')
    <div class="container">
        <h2><b>Campaign Saya</b></h2>
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card">
                    @if(auth()->user()->campaign_id != null)
                    <img src="{{ asset('/img/poster/'.$campaign->poster) }}" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $campaign->nama_campaign }}</b></h5>
                        <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>{{ $campaign->kategori }}</button>
                        <p class="card-text mt-4">
                            <i class="fa-solid fa-circle"></i>  {{ $campaign->kabupaten }}, {{ $campaign->provinsi }}
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  {{ $campaign->tgl_mulai_campaign }} s/d {{ $campaign->tgl_selesai_campaign }}
                        </p>
                        <form action="campaignsaya" method="post">
                            @csrf
                            @method('delete')
                            <a href="" class="btn btn-primary">Tulis Laporan</a>
                            <button type="submit" class="btn btn-danger mt-4">Berhenti dari Campaign</button>
                        </form>
                        @else
                        <div></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection