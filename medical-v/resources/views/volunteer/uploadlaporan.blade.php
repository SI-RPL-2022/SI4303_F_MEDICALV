@extends('layouts.app')

@section('title', 'Laporan Campaign')

@section('content')

<div style="padding-top: 40px;">
    <div class="container">
        <h2>Campaign : Pencegahan Stunting</h2>

        <h6 style="padding-top: 30px; padding-bottom:12px;">Upload file laporan pelaksanaan campaign :</h6>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <small id="passwordHelpInline" class="text-muted">
            Tipe file : .pdf, .docx
        </small>
    </div>
</div>
    
@endsection