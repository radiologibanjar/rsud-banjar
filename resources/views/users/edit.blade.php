@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="content-header">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <h4 class="text-warning fw-bold mb-0">✏️ Edit User</h4>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', $user) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" 
                               value="{{ old('name', $user->name) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" 
                               value="{{ old('username', $user->username) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" 
                               value="{{ old('email', $user->email) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Password <small class="text-muted">(kosongkan jika tidak diganti)</small></label>
                        <input type="password" name="password" class="form-control" placeholder="••••••••">
                    </div>

                    <div class="form-group mb-4">
                        <label>Role</label>
                        <select name="role" class="form-control" required>
                            <option value="superadmin" {{ $user->role === 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                            <option value="adminstaff" {{ $user->role === 'adminstaff' ? 'selected' : '' }}>Admin Staff</option>
                            <option value="doctor" {{ $user->role === 'doctor' ? 'selected' : '' }}>Doctor</option>
                            <option value="radiografer" {{ $user->role === 'radiografer' ? 'selected' : '' }}>Radiographer</option>
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save me-1"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
