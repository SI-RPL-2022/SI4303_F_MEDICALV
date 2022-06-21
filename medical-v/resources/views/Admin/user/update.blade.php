@extends('Admin.adminLayout.base')

@section('content')
<div class="container mx-5">
    <h5 class="mb-4">Profile Saya</h5>
    <div class="form">
    <form action="{{url('dashboard')}}/profile/{{$users->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group d-flex">
            @if ($users->picture==null)
                <img src="{{ asset('img/profile.jpg') }}" class="rounded-circle" alt="profile" width="100" height="100">
            @else
                <img src="{{ asset('img/' . $users->picture) }}" class="rounded-circle" alt="profile" width="100" height="100">
            @endif
            <input type="file" src="" alt="" class="mx-4 my-5" name="picture">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $users->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ $users->email }}">
        </div>
        <div class="form-group">
            <label>Alamat Tinggal</label>
            <input type="text" class="form-control" placeholder="address" name="address" value="{{ $users->address }}">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" placeholder="birth" name="birth" value="{{ $users->birth }}">
        </div>
        <button class="btn btn-outline-success mt-auto" type="submit">Submit</button>
        <button type="submit" class="rounded btn btn-danger"><a href="{{ url('users') }}" style="color: white;">Batal</a></button>
    </form>
</div>
</div>
@endsection