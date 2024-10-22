<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partner extends Model
{
    protected $table = 'partners';

    protected $fillable = [
        'nama',
        'tingkat_pendidikan',
        'jumlah_penghasilan',
        'jumlah_tabungan',
        'usia',
        'tempat_tinggal',
        'individual_id',
    ];

    public function individual(): BelongsTo {
        return $this->belongsTo(Individual::class);
    }
}
