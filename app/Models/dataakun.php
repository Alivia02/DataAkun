<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataakun extends Model
{
    use HasFactory;
    protected $table = "dataakun";

    protected $fillable = ['kode_akun', 'nama_akun', 'deskripsi', 'tipe_akun', 'kategori_akun', 'level_akun'];
    
    // Nonaktifkan timestamps
    public $timestamps = false;
}
