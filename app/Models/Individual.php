<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Individual extends Model
{
    protected $table = 'individuals';

    protected $fillable = [
        'nama',
        'tingkat_pendidikan',
        'jumlah_penghasilan',
        'jumlah_tabungan',
        'usia',
        'tempat_tinggal',
    ];

    public function partner(): HasOne {
        return $this->hasOne(Partner::class);
    }

    // Mendapatkan partner
    public function getPartner() {
        return $this->partner; // Menggunakan relasi untuk mendapatkan partner
    }
}
