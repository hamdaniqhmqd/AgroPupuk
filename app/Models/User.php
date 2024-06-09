<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'username',
        'password',
        'nama',
        'email',
        'gambar',
        'jenis_kelamin',
        'tgl_lahir',
        'no_hp',
        'alamat',
        'deskripsi',
        'role',
        'session_expiry',
    ];

    public function berita()
    {
        return $this->hasMany(Berita::class);;
    }
    public function sipupuk()
    {
        return $this->hasMany(Sipupuk::class);;
    }

    public function produkmutu()
    {
        return $this->hasMany(produkmutu::class);;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
