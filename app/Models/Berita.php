<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // isi dari tabel beritas yang akan di kelola melalui
    // controller laman admin berita
    protected $fillable = [
        'id',
        'gambar_berita',
        'nama_berita',
        'deskripsi_berita',
        'link_berita',
        'id_admin',
        'pengunjung_berita',
    ];
}
