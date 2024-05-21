<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductStore;

class produkmutu extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 
        'title', 
        'jenis', 
        'description', 
        'price', 
        'user_id', // Add user_id to fillable
        'author'
    ];

    public function productStores()
    
    {
        return $this->hasMany(ProductStore::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}