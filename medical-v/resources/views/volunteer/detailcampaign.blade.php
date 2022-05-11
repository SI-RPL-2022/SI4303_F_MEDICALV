@extends('layouts.app')

@section('title', 'Detail Campaign')

@section('content')
    <div class="container mt-4">
        @foreach ($campaign as $row)
            <div class="row">
                <div class="col">
                    <img src="/img/poster/{{ $row->poster }}" style="width: 100%">
                </div>
                <div class="col">
                    <h1><b>{{ $row->nama_campaign }}</b></h1>
                    <button type="button" class="btn btn-sm btn-outline-success mt-3" disabled>{{ $row->kategori }}</button>
                    <p class="mt-5">
                        <i class="fa-solid fa-circle"></i>  {{ $row->kabupaten }}, {{ $row->provinsi }}
                    </p>
                    <p>
                        <i class="fa-solid fa-circle"></i> Pelaksanaan campaign :  {{ $row->tgl_mulai_campaign }} s/d {{ $row->tgl_selesai_campaign }}
                    </p>
                    <p>
                        <i class="fa-solid fa-circle"></i>  {{ $row->org_name }}
                    </p>
                    <p class="mt-5" style="color: red"><b>Pendaftaran dibuka hingga {{ $row->tgl_selesai_pendaftaran }}</b></p>
                    <form action="/daftarcampaignsukses/{{ $row->id }}" method="post">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-lg medical-v-color-background" style="color: white">Daftar Campaign</button>
                    </form>
                </div>
            </div>
            <hr class="mt-4">
            <h3 class="mt-3">
                <b>Deskripsi</b>
            </h3>
            <p class="mt-4">
                {{ $row->deskripsi }}
            </p>
        @endforeach
    </div>
@endsection