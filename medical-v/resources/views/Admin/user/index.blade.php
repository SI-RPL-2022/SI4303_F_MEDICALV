@extends('Admin.adminLayout.base')

@section('content')
<div class="card m-5">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Data Profile</h5>
      <div class="table-responsive">
        <table class="table table-striped m-3" width="100%">
            <thead>
                <tr>
                    <th scope="col" width="20%">No</th>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="20%">Phone Number</th>
                    <th scope="col" width="20%">Address</th>
                    <th scope="col"width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>{{ $item->address }}</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{ url('dashboard/profile',$item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ url('dashboard')}}/profile/{{$item->id}}/edit" type="submit" class="btn btn-warning btn-sm mx-2">Edit Product</a>
                            <button type="submit" class="btn btn-danger btn-icon-text mx-2 rounded-3">
                                <i class="typcn typcn-trash btn-icon-prepend"></i>
                                Delete Data
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
  </div>
@endsection