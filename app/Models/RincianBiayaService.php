<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianBiayaService extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'service_id',
        'keterangan',
        'biaya',
    ];

    public function RincianBiayaService(){
        return $this->hasMany(RincianBiayaService::class, 'rincian_biaya_service');
    }
}
