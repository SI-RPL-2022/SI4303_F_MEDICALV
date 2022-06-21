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

<h3 style="margin-top: 50px; margin-bottom: 20px;">Statistik Campaign per Provinsi</h3>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
    </div>
    <div class="card-body">
        <div class="chart-bar">
            <canvas id="myBarChart"></canvas>
        </div>
        <hr>
        Styling for the bar chart can be found in the
        <code>/js/demo/chart-bar-demo.js</code> file.
    </div>
</div>
@endsection
