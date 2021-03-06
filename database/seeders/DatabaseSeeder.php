<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call([
            ArtistSeeder::class,
            ArtSeeder::class,
        ]);

        Model::reguard();
        // \App\Models\User::factory(10)->create();
    }
}
