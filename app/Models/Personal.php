<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = "personals";
    protected $primarykey = "id";
    protected $fillable = ['pasien_id', 'tgl_datang', 'berat_badan', 'tinggi_darah', 'tgl_kembali'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
