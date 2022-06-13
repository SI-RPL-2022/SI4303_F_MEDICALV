@extends('Admin.layouts.main')

@section('content')

<h1 style="font-weight: 700">Update Organisasi</h1>
    <form action="/updatevolunteeradmin/{{ $data->id_user }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="namacampaign">Nama</label>
                <input type="text" name="nama_user" class="form-control" value="{{ $data->nama_user }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Email</label>
                <input type="text" name="email" class="form-control" value="{{ $data->email }}">
            </div>
            
            <div class="mb-3">
                <label for="namacampaign">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" value="{{ $data->tanggal_lahir }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Jenis Kelamin</label>
                <input type="text" name="gender" class="form-control" value="{{ $data->gender }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}">
            </div>
                
        <button type="submit" class="btn btn-primary">Update Akun</button>
        <a href="/daftarvolunteeradmin" class="btn btn-danger">Cancel</a>
    </form>

@endsection