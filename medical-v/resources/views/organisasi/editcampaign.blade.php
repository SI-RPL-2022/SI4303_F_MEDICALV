<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Campaign</title>
</head>
<body>
    <h1>Edit Campaign</h1>
    <form action="/org/{{$campaign->id}}" method="POST" enctype="multipart/form-data">
    @method('put')    
    @csrf
        <label for="nama_campaign">Nama Campaign</label>
        <input type="text" name="nama_campaign" value="{{$campaign->nama_campaign}}">
        <br>
        <br>
        <input type="hidden" name="org_id" value="{{$campaign->org_id}}">
        <label for="nama_org">Penyelenggara</label>
        <input type="text" name="nama_org" value="{{$campaign->org_name}}">
        <br>
        <br>
        <label>Lokasi Campaign</label>
        <select name="provinsi" id="province" placeholder="Provinsi">
                <option value="{{$campaign->provinsi}}">{{$campaign->provinsi}}</option>
                @foreach ($provinces as $id => $name)
                    <option value="{{ $name }}">{{ $name }}</option>
                @endforeach
        </select>

        <input type="text" name="kabupaten" value="{{$campaign->kabupaten}}">
        <input type="text" name="kecamatan" value="{{$campaign->kecamatan}}">
        <br>
        <br>
        <label for="kategori">Kategori</label>
        <select name="kategori" id="province" placeholder="Provinsi">
                <option value="{{$campaign->kategori}}">{{$campaign->kategori}}</option>
                @foreach ($kat as $id => $kategori)
                    <option value="{{ $kategori }}">{{ $kategori }}</option>
                @endforeach
        </select>
        <br>
        <br>
        <label for="tgl_mulai">Mulai Campaign</label>
        <input type="date" name="tgl_mulai" value="{{$campaign->tgl_mulai_campaign}}">
        <br>
        <br>
        <label for="tgl_selesai">Selesai Campaign</label>
        <input type="date" name="tgl_selesai" value="{{$campaign->tgl_selesai_campaign}}">
        <br>
        <br>
        <label for="tgl_daftar">Tanggal Pendaftaran</label>
        <input type="date" name="tgl_daftar" value="{{$campaign->tgl_mulai_pendaftaran}}">
        <br>
        <br>
        <label for="tutup_daftar">Selesai Pendaftaran</label>
        <input type="date" name="tutup_daftar" value="{{$campaign->tgl_selesai_pendaftaran}}">
        <br>
        <br>
        <label for="deskripsi">Deskripsi Campaign</label>
        <textarea name="deskripsi" id="" cols="30" rows="10">{{$campaign->deskripsi}}</textarea>
        <br>
        <br>
        <label for="poster">Poster Campaign</label>
        <input type="file" name="poster" id="">
        <br>
        <br>

        <input type="submit" value="Update Campaign" name="submit">
    </form>
</body>
</html>