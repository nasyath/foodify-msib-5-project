<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penerima extends Model
{
    use HasFactory;
    protected $table = 'tb_penerima';
    protected $fillable = [
        'nama_penerima','alamat','no_hp','deskripsi','status','foto', 'users_id'
    ];

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function tb_donasi(): HasMany
    {
        return $this->hasMany(Donasi::class);
     }
}
