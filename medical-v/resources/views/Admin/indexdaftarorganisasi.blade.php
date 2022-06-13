@extends('Admin.layouts.main')

@section('content')
<h1 style="font-weight: 700">Daftar Organisasi</h1>
<!-- <a href="{{ url('create') }}" class="btn btn-primary">+ Campaign</a> -->
<table id="datatable" class="table table-success table-striped table-bordered">
    <thead class="table-dark text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Organisasi</th>
            <th scope="col">Alamat</th>
            <th scope="col" colspan="2">Logo Organisasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $daftarorganisasi)
        <tr>
            <td>{{ $daftarorganisasi->id_organisasi }}</td>
            <td>{{ $daftarorganisasi->nama_organisasi }}</td>
            <td>{{ $daftarorganisasi->alamat_organisasi }}</td>
            <td>{{ $daftarorganisasi->logo_organisasi }}</td>
            <td class="text-center">
                <a href="/showorganisasiadmin/{{ $daftarorganisasi->id_organisasi }}" class="btn btn-warning detail">Edit</a>
                <a href="/deleteorganisasiadmin/{{ $daftarorganisasi->id_organisasi }}" class="btn btn-danger delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection