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
        'user_id', 
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