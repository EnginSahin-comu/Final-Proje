<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;

    protected $primaryKey = 'urun_id';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function yorumlar()
    {
        return $this->hasMany(Yorum::class, 'urun_id');
    }

    public function tedarikciler()
    {
        return $this->belongsToMany(Tedarikci::class, 'urun_tedarikcileri', 'urun_id', 'tedarikci_id');
    }
}
