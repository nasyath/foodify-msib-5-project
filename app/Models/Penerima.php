<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penerima extends Model
{
    use HasFactory;
    protected $table = 'tb_penerima';
    protected $fillable = [
        'nama_penerima','alamat','no_hp','deskripsi','status','foto'
    ];

    public $timestamps = false;

    public function tb_donasi(): HasMany
    {
        return $this->hasMany(Donasi::class);
     }
}
