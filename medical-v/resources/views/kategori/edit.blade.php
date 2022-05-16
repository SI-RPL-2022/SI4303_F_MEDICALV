<div class="p2">
    <div class="form-group">
        <label for="name">Kategori</label>
        <input type="text" value="{{ $data->kategori }}" name="kategori" id="kategori" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-warning mt-2" onclick="update({{ $data->kode_kategori }})">Update</button>
    </div>
</div>