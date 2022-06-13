@extends('Admin.layouts.main')

@section('content')

<h1 style="font-weight: 700">Verifikasi Campaign</h1>
    <form action="/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset disabled>
            <div class="mb-3">
                <label for="namacampaign">Nama Campaign</label>
                <input type="text" name="nama_campaign" class="form-control" value="{{ $data->nama_campaign }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $data->kategori }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Id Organisasi</label>
                <input type="text" name="org_id" class="form-control" value="{{ $data->org_id }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Nama Organisasi</label>
                <input type="text" name="org_name" class="form-control" value="{{ $data->org_name }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" value="{{ $data->provinsi }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control" value="{{ $data->kabupaten }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" value="{{ $data->kecamatan }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Tanggal Mulai Campaign</label>
                <input type="date" name="tgl_mulai_campaign" class="form-control" value="{{ $data->tgl_mulai_campaign }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Tanggal Selesai Campaign</label>
                <input type="date" name="tgl_selesai_campaign" class="form-control" value="{{ $data->tgl_selesai_campaign }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Tanggal Mulai pendaftaran</label>
                <input type="date" name="tgl_mulai_pendaftaran" class="form-control" value="{{ $data->tgl_mulai_pendaftaran }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Tanggal Selesai Pendaftaran</label>
                <input type="date" name="tgl_selesai_pendaftaran" class="form-control" value="{{ $data->tgl_selesai_pendaftaran }}">
            </div>

            <div class="mb-3">
                <label for="namacampaign">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $data->deskripsi }}">
            </div>
        </fieldset>

        <div class="mb-3">
            <label for="namacampaign">Status Verifikasi</label>
                <select name="verif_status" class="form-select">
                    <option selected>{{ $data->verif_status }}</option>
                    <option>Terverifikasi</option>
                    <option>Tidak Terverifikasi</option>
                </select>
        </div>

            <div class="mb-3">
                <label for="namacampaign">Status Campaign</label>
                <select name="campaign_status" class="form-select">
                    <option selected>{{ $data->campaign_status }}</option>
                    <option>Open</option>
                    <option>Closed</option>
                </select>
            </div>

        <fieldset disabled>
            <div class="mb-3">
                <label for="namacampaign">Poster</label>
                <input type="text" name="poster" class="form-control" value="{{ $data->poster }}">
            </div>
        </fieldset>
                
        <button type="submit" class="btn btn-primary">Update Campaign</button>
        <a href="/indexdaftarcampaignadmin" class="btn btn-danger">Cancel</a>
    </form>

@endsection