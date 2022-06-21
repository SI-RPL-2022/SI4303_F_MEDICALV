@extends('layouts.main')

@section('content')
<h1 style="margin-bottom: 20px;">Dashboard</h1>

<div class="data">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <p style="opacity: 0,5;">Jumlah Volunteer</p>
                    <h2>{{ $user }} Pengguna</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <p>Jumlah Mitra</p>
                    <h3>{{ $org }} Mitra</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <p>Jumlah Campaign</p>
                    <h3>{{ $campaign }} Campaign</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
