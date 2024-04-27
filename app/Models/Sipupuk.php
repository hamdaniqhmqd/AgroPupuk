<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sipupuk extends Model
{
    protected $table = 'sipupuks';

    protected $fillable = [
        'image',
        'title',
        'content',
        'author'
    ];

    }
