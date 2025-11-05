@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <h2 class="text-light mb-4"><i class="fas fa-users-cog"></i> Admin Staff Dashboard</h2>
    <p>Selamat datang, {{ $user->name }}! Anda dapat mengelola data pasien dan laporan.</p>
</div>
@endsection
