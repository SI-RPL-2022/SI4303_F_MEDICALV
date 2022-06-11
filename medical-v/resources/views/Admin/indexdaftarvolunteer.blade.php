@extends('Admin.layouts.main')

@section('content')
<h1 style="font-weight: 700">Daftar Volunteer</h1>
<!-- <a href="{{ url('create') }}" class="btn btn-primary">+ Campaign</a> -->
<table id="datatable" class="table table-success table-striped table-bordered">
    <thead class="table-dark text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $daftarvolunteer)
        <tr>
            <td>{{ $daftarvolunteer->id_user }}</td>
            <td>{{ $daftarvolunteer->nama_user }}</td>
            <td>{{ $daftarvolunteer->gender }}</td>
            <td>{{ $daftarvolunteer->alamat }}</td>
            <td class="text-center">
                <a href="/showvolunteeradmin/{{ $daftarvolunteer->id_user }}" class="btn btn-warning detail">Edit</a>
                <a href="/deletevolunteeradmin/{{ $daftarvolunteer->id_user }}" class="btn btn-danger delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection