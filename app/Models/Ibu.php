<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;
    protected $table = "ibus";
    protected $primarykey = "id";
    protected $fillable = ['name', 'tempat_lahir', 'tanggal_lahir', 'agama_ibu', 'pendidikan', 'pekerjaan_ibu', 'name_suami', 'agama_suami', 'pekerjaan_suami', 'alamat'];
}
