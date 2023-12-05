<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JMakanan extends Model
{
    use HasFactory;
    protected $table = 'tb_jenis_makanan';
    protected $fillable = ['nama_jenis'];

    public function tb_donasi(): HasMany
    {
        return $this->hasMany(Donasi::class);
     }
}
