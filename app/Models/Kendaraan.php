<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_kendaraan',
        'jenis_kendaraan',
        'merk_kendaraan',
        'tahun_pembuatan',
        'supir_id',
    ];

    public function Kendaraan(){
        return $this->hasMany(Vehicle::class, 'jenis_id');
    }
}
