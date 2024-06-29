<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'tanggal_lahir',
    ];

    public function Supir(){
        return $this->hasMany(Supir::class, 'supir_id');
    }
}
