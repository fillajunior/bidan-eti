<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kes_ibu_hamil extends Model
{
    use HasFactory;
    protected $table = "kes_ibu_hamil";
    protected $primarykey = "id";
    protected $fillable = ['ibu_id', 'tanggal', 'keluhan_sekarang', 'tekanan_darah', 'berat_badan', 'umur_kehamilan', 'letak_janin', 'denyut_jantung', 'kaki_bengkak', 'tindakan', 'tambahan'];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class);
    }
}
