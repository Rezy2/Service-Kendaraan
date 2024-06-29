<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'kendaraan_id',
        'supir_id',
        'keterangan',
        'tanggal_pengajuan',
        'tanggal_selesai',
        'status',
        'total_service',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function supir()
    {
        return $this->belongsTo(Supir::class);
    }
}
