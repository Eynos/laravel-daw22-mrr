<?php

namespace Database\Seeders;
use App\Models\Pasaje;
use App\Models\Piloto;
use App\Models\Vuelo;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Piloto::factory()->count(25)->create();
        Vuelo::factory()->count(100)->create();
        Pasaje::factory()->count(1000)->create();
    }
}
