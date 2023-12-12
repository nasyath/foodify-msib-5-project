<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'username',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Definisikan relasi dengan Donatur
    public function donatur()
    {
        return $this->hasOne(Donatur::class, 'users_id', 'id');
    }

    // Definisikan relasi dengan Penerima
    public function penerima()
    {
        return $this->hasOne(Penerima::class, 'users_id');
    }

    public function isAdmin()
    {
        return $this->role === 'Admin';
    }

    public function isDonatur()
    {
        return $this->role === 'Donatur';
    }

    public function isPenerima()
    {
        return $this->role === 'Penerima';
    }
}
