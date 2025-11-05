@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Dashboard</h1>
    <div class="card">
        <div class="card-body">
            Selamat datang, {{ Auth::user()->username }}!
        </div>
    </div>
</div>
@endsection
