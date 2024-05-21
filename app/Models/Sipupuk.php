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

    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($post) {
    //         if (Auth::check()) {
    //             $post->author = Auth::id();
    //         }
    //     });
    // }

    }
