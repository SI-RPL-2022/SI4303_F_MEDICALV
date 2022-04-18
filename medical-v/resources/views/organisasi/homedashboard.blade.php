<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Organisasi</title>
</head>
<body>
    <h1>Dashboard</h1>
    <a href="/addcampaign">Tambah Campaign</a>

    <br>
    <br>
    <table border="2">
    <tr style="font-weight: bold;">
        <td>ID Campaign</td>
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
        <td>{{$row->id}}</td>
        <td>{{$row->nama_campaign}}</td>
        <td>{{$row->kategori}}</td>
        <td>{{$row->tgl_mulai_campaign}} s.d {{$row->tgl_selesai_campaign}} </td>
        <td>{{$row->kecamatan}}, {{$row->kabupaten}}, {{$row->provinsi}} </td>
        <td>{{$row->deskripsi}}</td>
        <td><img src="/img/poster/{{$row->poster}}" alt="..." style="width: 200px"></td>
        <td>{{$row->campaign_status}}</td>
        <td>{{$row->verif_status}}</td>
        <td>
            <a href="/org/{{$row->id}}/edit">Edit Campaign</a>
            <form action="/org/{{$row->id}}" method='POST' class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Close Campaign</button>
            </form>
        </td>
    </tr>
    @endforeach
        
    </table>
</body>
</html>