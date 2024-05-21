<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Sipupuk extends Model
{
    use HasFactory;
    protected $table = 'sipupuks';

    protected $fillable = [
        'image',
        'title',
        'content',
        'author'
    ];

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
