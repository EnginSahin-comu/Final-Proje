<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kullanici;

class KullaniciSeeder extends Seeder
{
    public function run()
    {
        Kullanici::create([
            'kullanici_adi' => 'Ali Veli',
            'email' => 'ali.veli@example.com',
            'telefon' => '5551234567',
            'adres' => 'İstanbul, Türkiye',
            'sifre' => bcrypt('password123'),
        ]);

        Kullanici::create([
            'kullanici_adi' => 'Ayşe Yılmaz',
            'email' => 'ayse.yilmaz@example.com',
            'telefon' => '5559876543',
            'adres' => 'Ankara, Türkiye',
            'sifre' => bcrypt('password123'),
        ]);
    }
}
