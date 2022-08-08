<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengemudi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nik',
        'nama',
        'hp',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
