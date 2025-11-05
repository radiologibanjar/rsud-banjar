<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isAdmin() {
        return $this->role === 'superadmin';
    }

    public function isAdminStaff() {
        return $this->role === 'adminstaff';
    }

    public function isDoctor() {
        return $this->role === 'doctor';
    }

    public function isRadiographer() {
        return $this->role === 'radiografer';
    }

    public function hasRole($roles)
    {
        if (is_array($roles)) {
            return in_array($this->role, $roles) || $this->role === 'superadmin';
        }

        return $this->role === $roles || $this->role === 'superadmin';
    }

}
