<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('art')->insert([
            'ARTCODE' => '001',
            'ARTNAME' => 'the chess',
            'ARTTYPE' => '3D',
            'ARTISTCODE' => '001',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('art')->insert([
            'ARTCODE' => '002',
            'ARTNAME' => 'Gameboy Advance SP',
            'ARTTYPE' => '3D',
            'ARTISTCODE' => '002',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('art')->insert([
            'ARTCODE' => '003',
            'ARTNAME' => 'CAPCAP',
            'ARTTYPE' => '3D',
            'ARTISTCODE' => '003',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('art')->insert([
            'ARTCODE' => '004',
            'ARTNAME' => 'HollowKnight',
            'ARTTYPE' => 'PixelArt',
            'ARTISTCODE' => '003',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('art')->insert([
            'ARTCODE' => '005',
            'ARTNAME' => 'Electrical Room',
            'ARTTYPE' => '3D',
            'ARTISTCODE' => '002',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
