@extends('organisasi.layout.main')

@section('content')
    <h1>Mulai Campaign</h1>
    <form action="/addcampaign" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group cus-top-margin">
        <label for="nama_campaign" class="label-space">Nama Campaign</label>
        <input type="text" name="nama_campaign" id="nama_campaign" class="form-control">
    </div>
    <div class="form-group cus-top-margin">
        <input type="hidden" name="org_id" value="1">
        <label for="nama_org" class="label-space">Penyelenggara</label>
        <input type="text" name="nama_org" class="form-control" value="{{ session()->get('nama_organisasi') }}" readonly>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3 cus-top-margin">
            <label class="label-space">Provinsi</label>
            <select name="provinsi" id="province" placeholder="Provinsi" class="form-control col-md-4">
                    <option value="">Pilih Provinsi</option>
                    @foreach ($provinces as $id => $name)
                        <option value="{{ $name }}">{{ $name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="col-md-4 mb-3 cus-top-margin">
            <label for="kabupaten" class="label-space">Kabupaten</label>
            <input type="text" name="kabupaten" placeholder="Kabupaten"  class="form-control">
        </div>
        <div class="col-md-4 mb-3 cus-top-margin">
            <label for="Kecamatan" class="label-space">Kecamatan</label>
            <input type="text" name="kecamatan" placeholder="Kecamatan"  class="form-control">
        </div>
  </div>
  <div class="form-group cus-top-margin">
        <label for="kategori" class="label-space">Kategori</label>
        <select name="kategori" id="province" placeholder="Provinsi" class="form-control col-sm-4">
                <option value="">Pilih Kategori</option>
                @foreach ($kat as $id => $kategori)
                    <option value="{{ $kategori }}">{{ $kategori }}</option>
                @endforeach
        </select>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3 cus-top-margin">
            <label for="tgl_mulai" class="label-space">Mulai Campaign</label>
            <input type="date" name="tgl_mulai" class="form-control">
        </div>
        <div class="col-md-4 mb-3 cus-top-margin">
            <label for="tgl_selesai" class="label-space">Selesai Campaign</label>
            <input type="date" name="tgl_selesai" class="form-control">
        </div>
  </div>

  <div class="row">
        <div class="col-md-4 mb-3 cus-top-margin">
            <label for="tgl_daftar" class="label-space">Tanggal Pendaftaran</label>
            <input type="date" name="tgl_daftar" class="form-control">
        </div>
        <div class="col-md-4 mb-3 cus-top-margin">
            <label for="tutup_daftar" class="label-space">Selesai Pendaftaran</label>
            <input type="date" name="tutup_daftar" class="form-control">
        </div>
  </div>
    <div class="form-group cus-top-margin">
        <label for="deskripsi" class="label-space">Deskripsi Campaign</label>
        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group cus-top-margin">
        <label for="poster" class="label-space">Poster Campaign</label>
        <input type="file" name="poster" id="" class="form-control">
    </div>
    <input type="hidden" name="verif_status" value="Belum Terverifikasi">
    <input type="hidden" name="campaign_status" value="Closed">

    <input type="submit" value="Buat Campaign" name="submit" class="btn btn-primary btn-lg" style="margin-top: 40px;">
    </form>
@endsection