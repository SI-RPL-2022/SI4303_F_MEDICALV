<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
</head>
<body>
    <form action="/addkategori" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="kategori">Nama Kategori</label>
        <input type="text" name="kategori">
        <br>
        <br>

        <input type="submit" value="Buat Kategori" name="submit">
    </form>
</body>
</html>