<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama_kelurahan',
        'is_active',
        'kecamatan_id'
    ];

    public function kecamatan(): BelongsTo {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'kode');
    }
}
