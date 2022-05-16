@extends('Admin.layouts.main')

@section('content')
<h1 style="font-weight: 700">Daftar Campaign</h1>
<!-- <a href="{{ url('create') }}" class="btn btn-primary">+ Campaign</a> -->
<table id="datatable" class="table table-success table-striped table-bordered">
    <thead class="table-dark text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Campaign</th>
            <th scope="col">Nama Organisasi</th>
            <th scope="col">Status Verifikasi</th>
            <th scope="col">Status Campaign</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $daftarcampaign)
        <tr>
            <td>{{ $daftarcampaign->id }}</td>
            <td>{{ $daftarcampaign->nama_campaign }}</td>
            <td>{{ $daftarcampaign->org_name }}</td>
            <td>{{ $daftarcampaign->verif_status }}</td>
            <td>{{ $daftarcampaign->campaign_status }}</td>
            <td class="text-center">
                <a href="/show/{{ $daftarcampaign->id }}" class="btn btn-warning detail">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection