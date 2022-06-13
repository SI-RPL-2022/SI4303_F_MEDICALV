@extends('Admin.layouts.main')

@section('content')

<h1 style="font-weight: 700">Update Organisasi</h1>
    <form action="/updateorganisasiadmin/{{ $data->id_organisasi }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="namacampaign">Nama Organisasi</label>
                <input type="text" name="nama_organisasi" class="form-control" value="{{ $data->nama_organisasi }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Alamat</label>
                <input type="text" name="alamat_organisasi" class="form-control" value="{{ $data->alamat_organisasi }}">
            </div>
            
            <div class="mb-3">
                <fieldset>
                    <label for="namacampaign">Logo Organisasi</label>
                    <input type="text" name="logo_organisasi" class="form-control" value="{{ $data->logo_organisasi }}">
                </fieldset>
            </div>
                
        <button type="submit" class="btn btn-primary">Update Akun</button>
        <a href="/daftarorganisasiadmin" class="btn btn-danger">Cancel</a>
    </form>

@endsection