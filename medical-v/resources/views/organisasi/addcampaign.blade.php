<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Campaign</title>
</head>
<body>
    <h1>Mulai Campaign</h1>
    @csrf
    <form action="org/addcampaign" method="post" >
        <label for="nama_campaign">Nama Campaign</label>
        <input type="text" name="nama_campaign">
        <br>
        <br>
        <label for="nama_org">Penyelenggara</label>
        <input type="text" name="nama_org">
        <br>
        <br>
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori">
        <br>
        <br>
        <label for="tgl_mulai">Mulai Campaign</label>
        <input type="date" name="tgl_mulai">
        <br>
        <br>
        <label for="tgl_selesai">Selesai Campaign</label>
        <input type="date" name="tgl_selesai">
        <br>
        <br>
        <label for="tgl_daftar">Tanggal Pendaftaran</label>
        <input type="date" name="tgl_daftar">
        <br>
        <br>
        <label for="tutup_daftar">Selesai Pendaftaran</label>
        <input type="date" name="tutup_daftar">
        <br>
        <br>
        <label for="deskripsi">Deskripsi Campaign</label>
        <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="hidden" name="verif_status" value="Belum Terverifikasi">
        <br>
        <br>
        <input type="hidden" name="campaign_status" value="Closed">

        <input type="submit" value="Buat Campaign" name="submit">
    </form>
</body>
</html>