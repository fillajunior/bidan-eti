<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kes_ibu_nifas extends Model
{
    use HasFactory;
    protected $table = "kes_ibu_nifas";
    protected $primarykey = "id";
    protected $fillable = ['ibu_id', 'tanggal_persalinan', 'umur_kehamilan', 'penolong_persalinan', 'cara_persalinan', 'keterangan_tambahan'];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class);
    }
}
