<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Berita extends Model
{
    use HasFactory;

    // isi dari tabel beritas yang akan di kelola melalui
    // controller laman admin berita
    protected $fillable = [
        'id_berita',
        'gambar_berita',
        'judul_berita',
        'deskripsi_berita',
        'link_berita',
        'author',
        'pengunjung_berita',
    ];

    protected $primaryKey = 'id_berita';

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }

    // Method untuk mengisi user_id secara otomatis dengan ID pengguna yang sedang terautentikasi
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (Auth::check()) {
                $post->author = Auth::id();
            }
        });
    }
}
