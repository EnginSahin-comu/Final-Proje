<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            KullaniciSeeder::class,
            KategoriSeeder::class,
            UrunSeeder::class,
            YorumSeeder::class,
            SiparisSeeder::class,
            TedarikciSeeder::class,
        ]);
    }
}
