<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pegawai',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'kelurahan_id',
        'kecamatan_id',
        'provinsi_id'
    ];

    public function kelurahan(): BelongsTo {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'kode');
    }

    public function kecamatan(): BelongsTo {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'kode');
    }

    public function provinsi(): BelongsTo {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'kode');
    }
}
