@extends('organisasi.layout.main')

@section('content')
    <h1 style="padding-bottom: 20px;">Report</h1>
    <table border="2" class="table table-bordered">
    <tr style="font-weight: bold;">
        <td>ID Report</td>
        <td>User ID</td>
        <td>Campaign ID</td>
        <td>Report</td>
        <td>Action</td>
    </tr>

    @foreach ($report as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->user->name}}</td>
        <td>{{$row->campaign->nama_campaign}}</td>
        <td>{{$row->filename}}</td>
        <td><a href="/docs/{{$row->filename}}"><button class="btn btn-primary">Download</button></a></td>
    </tr>
    @endforeach
        
    </table>
@endsection