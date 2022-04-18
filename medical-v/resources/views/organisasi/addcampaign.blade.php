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
    <form action="/addcampaign" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="nama_campaign">Nama Campaign</label>
        <input type="text" name="nama_campaign">
        <br>
        <br>
        <input type="hidden" name="org_id" value="1">
        <label for="nama_org">Penyelenggara</label>
        <input type="text" name="nama_org">
        <br>
        <br>
        <label>Lokasi Campaign</label>
        <select name="provinsi" id="province" placeholder="Provinsi">
                <option value="">== Pilih Provinsi ==</option>
                @foreach ($provinces as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
        </select>

        <input type="text" name="kabupaten">
        <input type="text" name="kecamatan" id="">
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
        <!-- <label for="poster">Poster Campaign</label>
        <input type="file" name="poster" id="">
        <br>
        <br> -->
        <input type="hidden" name="verif_status" value="Belum Terverifikasi">
        <br>
        <br>
        <input type="hidden" name="campaign_status" value="Closed">

        <input type="submit" value="Buat Campaign" name="submit">
    </form>
    <script>
        function onChangeSelect(url, id, name) {
        // send ajax request to get the cities of the selected province and append to the select tag
        $.ajax({
            url: url,
            type: 'GET',
            data: {
            id: id
            },
            success: function (data) {
            $('#' + name).empty();
            $('#' + name).append('<option>==Pilih Salah Satu==</option>');
            $.each(data, function (key, value) {
                $('#' + name).append('<option value="' + key + '">' + value + '</option>');
            });
            }
        });
        }
        $(function () {
        $('#provinsi').on('change', function () {
            onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
        });
        $('#kota').on('change', function () {
            onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
        })
        $('#kecamatan').on('change', function () {
            onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
        })
        });
    </script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

