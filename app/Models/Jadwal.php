<?php

namespace App\Models;

use App\Models\Kendaraan;
use App\Models\Pengemudi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Jadwal extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, HasMediaTrait;

    protected $fillable = [
        'waktu',
        'kegiatan',
        'pengemudi_id',
        'kendaraan_id',
        'user_id',
    ];

    protected $dates = ['waktu'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pengemudi()
    {
        return $this->belongsTo(Pengemudi::class);
    }
    
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
