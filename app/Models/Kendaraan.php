<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kendaraan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'jenis',
        'merek',
        'kapasitas',
        'pelat',
        'pajak',
    ];

    protected $dates = ['pajak'];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
