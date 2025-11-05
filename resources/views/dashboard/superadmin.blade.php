@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <h2 class="text-light mb-4"><i class="fas fa-user-shield"></i> Super Admin Dashboard</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card bg-gradient-dark text-white shadow">
                <div class="card-body">
                    <h5>Total User</h5>
                    <p class="h3">120</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-gradient-primary text-white shadow">
                <div class="card-body">
                    <h5>Data Pasien</h5>
                    <p class="h3">560</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
