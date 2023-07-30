<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    
    protected $perPage = 5;
    protected $table = "pasiens";
    protected $primarykey = "id";
    protected $fillable = ['name', 'umur', 'nama_suami', 'tgl_awal', 'metode'];

    public function personal()
    {
        return $this->hasOne(Personal::class, 'pasien_id');
    }
}
