<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    use HasFactory;

    protected $fillable = [
        'produkmutu_id',
        'store_name',
        'store_link',
        'marketplace',
    ];

    public function produkmutu()
    {
        return $this->belongsTo(produkmutu::class);
    }
}

