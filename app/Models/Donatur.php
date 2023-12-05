<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;
    protected $table = 'tb_donatur';
    protected $fillable = [
        'nama_donatur', 'alamat', 'no_hp', 'deskripsi',
        'foto', 'id_users'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
