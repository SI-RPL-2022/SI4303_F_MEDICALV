@extends('organisasi.layout.main')

@section('content')
    <h1>Dashboard</h1>
    <a href="/addcampaign" class="btn btn-primary">Tambah Campaign</a>

    <br>
    <br>
    <table border="2" class="table table-bordered">
    <tr style="font-weight: bold;">
        <td>Nama Campaign</td>
        <td>Kategori</td>
        <td>Tanggal Campaign</td>
        <td>Lokasi Campaign</td>
        <td>Deskripsi</td>
        <td>Poster</td>
        <td>Status Campaign</td>
        <td>Status Verifikasi</td>
        <td>Action</td>
    </tr>

    @foreach ($campaign as $row)
    <tr>
        <td>{{$row->nama_campaign}}</td>
        <td>{{$row->kategori}}</td>
        <td>{{$row->tgl_mulai_campaign}} s.d {{$row->tgl_selesai_campaign}} </td>
        <td>{{$row->kecamatan}}, {{$row->kabupaten}}, {{$row->provinsi}} </td>
        <td>{{$row->deskripsi}}</td>
        <td><img src="/img/poster/{{$row->poster}}" alt="..." style="width: 200px"></td>
        <td>{{$row->campaign_status}}</td>
        <td>{{$row->verif_status}}</td>
        <td>
            <a href="/org/{{$row->id}}/edit" class="btn btn-warning" style="margin-bottom: 5px;">Edit Campaign</a>
            <form action="/org/{{$row->id}}" method='POST' class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Close Campaign</button>
            </form>
        </td>
    </tr>
    @endforeach
        
    </table>
    @endsection