<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;
    protected $table = 'tb_penerima';
    protected $fillable = [
        'nama_penerima', 'alamat', 'no_hp', 'deskripsi', 'status',
        'foto', 'id_users'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
