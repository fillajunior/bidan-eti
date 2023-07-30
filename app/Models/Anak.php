<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $table = "anaks";
    protected $primarykey = "id";
    protected $fillable = ['jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'nama_ibu', 'nama_ayah', 'alamat'];
}
