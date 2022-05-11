@extends('layouts.app')

@section('title', 'Detail Campaign')

@section('content')
    @if($errors->any())
    <div class="alert alert-success">
        {{$msg}}
    </div>    
    @endif
    <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/poster/'.$campaign->poster) }}" style="width: 100%">
                </div>
                <div class="col">
                    <h2><b>{{ $campaign->nama_campaign }}</b></h2>
                    <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>{{ $campaign->kategori }}</button>
                    <p class="mt-5">
                        <i class="fa-solid fa-circle"></i>  {{ $campaign->kabupaten }}
                    </p>
                    <p>
                        <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  {{ $campaign->tgl_mulai_campaign }} s/d {{ $campaign->tgl_selesai_campaign }}
                    </p>
                    <p>
                        <i class="fa-solid fa-circle"></i>  {{ $campaign->org_name }}
                    </p>
                    <a href="/campaignsaya" class="btn btn-lg medical-v-color-background mt-5" style="color: white; width: 100%">Lihat Campaign Saya</a>
                </div>
            </div>
    </div>
@endsection