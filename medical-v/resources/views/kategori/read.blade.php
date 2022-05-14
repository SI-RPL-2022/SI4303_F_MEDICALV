<table class="table table-striped m-3">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->kode_kategori }}</td>
            <td>{{ $item->kategori }}</td>
            <td>
              <button class="btn btn-warning" onclick="show({{ $item->kode_kategori }})">Edit</button>
              <button class="btn btn-danger" onclick="hapus({{ $item->kode_kategori }})">Delete</button>
          </td>
        </tr>
        @endforeach
</table>