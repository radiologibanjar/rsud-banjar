@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <h2 class="text-light mb-4"><i class="fas fa-x-ray"></i> Radiografer Dashboard</h2>
    <p>Selamat datang, {{ $user->name }}! Anda dapat mengunggah hasil radiologi pasien di sini.</p>
</div>
@endsection
