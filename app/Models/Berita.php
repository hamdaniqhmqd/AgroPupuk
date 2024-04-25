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
        'image',
        'name',
        'description',
        'link',
    ];
}
