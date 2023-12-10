<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Donatur extends Model
{
    use HasFactory;
    protected $table = 'tb_donatur';
    protected $fillable = [
        'nama_donatur','alamat','no_hp','deskripsi','foto', 'users_id',
    ];

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function tb_donasi(): HasMany
    {
        return $this->hasMany(Donasi::class, 'id_donatur');
    }
}
