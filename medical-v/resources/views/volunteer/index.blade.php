@extends('adminLayout.base')

@section('content')
<div class="container content d-flex flex-column">
    <h3 class="fw-bold">Relawan Cegah Stunting Desa Pakembaran</h3>
    <div class="box-category">
      <p class="text-center">Anak - anak</p>
    </div>
    <ul class="content-ul">
      <li>
        <a class="group">
          <object
            data="{{ asset('assets/img/icon/iconcampaignloc.svg') }}"
            width="15px"
            type=""
            class="icon"
          ></object>
          <span class="text-group-content">Kab. Banyumas, Jawa Tengah</span>
        </a>
      </li>
      <li>
        <a class="group">
          <object
            data="{{ asset('assets/img/icon/iconcampaignloc.svg') }}"
            width="15px"
            type=""
            class="icon"
          ></object>
          <span class="text-group-content">12 April - 12 Mei 2022</span>
        </a>
      </li>
    </ul>

    <h4 style="margin-top:30px ;" class="fw-bold">Deskripsi</h4>
    <p>Stunting atau kerdil adalah kondisi gagal tumbuh pada anak balita akibat kekurangan gizi kronis, infeksi berulang, dan stimulasi psikososial yang tidak memadai terutama dalam 1.000 hari pertama kehidupan, yaitu dari janin sampai anak berusia dua tahun. Beberapa kegiatan pencegahan stunting desa pakembaran tersebut seperti pembangunan/rehabilitasi poskesdes, polindes dan Posyandu, penyediaan makanan sehat untuk peningkatan gizi balita dan anak, perawatan kesehatan untuk ibu hamil dan menyusui.</p>

    <h4 style="margin-top:20px ;" class="fw-bold">Data Pendaftar</h4>

    <table class="table table-bordered table-hover table-striped">
      <thead>
          <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Foto Profil</th>
          </tr>
      </thead>
      <tbody>
          @foreach($vol as $item)
          <tr>
              <td>{{ $item->id_user }}</td>
              <td>{{ $item->nama_user }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->tanggal_lahir }}</td>
              <td>{{ $item->gender }}</td>
              <td>{{ $item->alamat }}</td>
              <td><img src="{{ asset('assets/img/unsplash/volProfile.jpg') }}" alt="fotoProfile" style="width:70px;"></td>
          </tr>
          @endforeach
      </tbody>
  </table>
    </div>
@endsection