<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kullanici extends Model
{
    use HasFactory;

    protected $primaryKey = 'kullanici_id';

    public function yorumlar()
    {
        return $this->hasMany(Yorum::class, 'kullanici_id');
    }

    public function siparisler()
    {
        return $this->hasMany(Siparis::class, 'kullanici_id');
    }
}
