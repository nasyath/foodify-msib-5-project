<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\HasMany;

class Donasi extends Model
{
    use HasFactory;
    protected $table = 'tb_donasi';
    protected $fillable = ['status','tgl_mulai','tgl_akhir','jumlah','foto',
                            'keterangan','id_donatur','id_penerima','id_makanan',];

    public $timestamps = false;

    public function jmakanan(): BelongsTo
    {
        return $this->belongsTo(JMakanan::class);
    }
}
