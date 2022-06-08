<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\edukasi;
use App\Models\rumahSakit;
use App\Models\apotek;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        edukasi::factory(10)->create();
        rumahSakit::factory(10)->create();
        apotek::factory(10)->create();

    }
}
