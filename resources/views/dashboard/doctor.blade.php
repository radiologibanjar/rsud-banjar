@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <h2 class="text-light mb-4"><i class="fas fa-stethoscope"></i> Doctor Dashboard</h2>
    <p>Selamat datang, {{ $user->name }}! Anda dapat melihat laporan dan hasil radiologi pasien.</p>
</div>
@endsection
