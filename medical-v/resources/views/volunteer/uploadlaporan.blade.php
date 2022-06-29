@extends('layouts.app')

@section('title', 'Laporan Campaign')

@section('content')

<div style="padding-top: 40px;">
    <div class="container">
        <h2>Campaign : {{ $campaign->nama_campaign }}</h2>

        <!-- <h6 style="padding-top: 30px; padding-bottom:12px;">Upload file laporan pelaksanaan campaign :</h6> -->
        <form action="/uploadlaporan" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" readonly value="{{ auth()->user()->name }}" class="form-control" name="nama">
            </div>

            <div class="form-group">
                <label for="dokumen">Upload file laporan pelaksanaan campaign :</label>
                <input type="file" name="dokumen" id="dokumen" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="form-control">
                <input type="hidden" name="campaign_id" value="{{ $campaign->id }}" class="form-control">
            </div>

            <input type="submit" value="Upload Laporan" name="submit" class="btn btn-primary">
        </form>

    </div>
</div>
    
@endsection