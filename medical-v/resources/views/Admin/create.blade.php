@extends('Admin.layouts.main')

@section('content')
<h1 style="font-weight: 700">Tambah Campaign</h1>
<form action="/store" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="namacampaign">Nama Campaign</label>
        <input type="text" name="nama_campaign" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Kategori</label>
        <input type="text" name="kategori" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Id Organisasi</label>
        <input type="text" name="org_id" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Nama Organisasi</label>
        <input type="text" name="org_name" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Provinsi</label>
        <input type="text" name="provinsi" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Kabupaten</label>
        <input type="text" name="kabupaten" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Tanggal Mulai Campaign</label>
        <input type="date" name="tgl_mulai_campaign" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Tanggal Selesai Campaign</label>
        <input type="date" name="tgl_selesai_campaign" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Tanggal Mulai pendaftaran</label>
        <input type="date" name="tgl_mulai_pendaftaran" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Tanggal Selesai Pendaftaran</label>
        <input type="date" name="tgl_selesai_pendaftaran" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Status Verifikasi</label>
        <input type="text" name="verif_status" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Status Campaign</label>
        <input type="text" name="campaign_status" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="namacampaign">Poster</label>
        <input type="text" name="poster" class="form-control">
    </div>

    <div class="form-group mb-3">
        <button type="submit" class="btn btn-primary">Tambah Campaign</button>
    </div>

    <div class="form-group mb-3">
        <a href="{{ url('/') }}">
            << Kembali ke halaman utama >>
        </a>
    </div>
</form>
@endsection