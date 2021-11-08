<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artists')->insert([
            'ARTCODE'=>'001',
            'ARTISTNAME'=>'LimosArt',
            'NOTELP'=>'770-778-2773',
            'ADDRESS'=>'607 Heavner Avenue',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'002',
            'ARTISTNAME'=>'CrazyjArt',
            'NOTELP'=>'970-523-2178',
            'ADDRESS'=>'1112 Shobe Lane',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'003',
            'ARTISTNAME'=>'Fintadox',
            'NOTELP'=>'973-698-7638',
            'ADDRESS'=>'4425 Spring Haven Trail',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'004',
            'ARTISTNAME'=>'WooStarPixels',
            'NOTELP'=>'916-478-1766',
            'ADDRESS'=>'1071 Park Avenue',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'005',
            'ARTISTNAME'=>'Wora_Work',
            'NOTELP'=>'313-655-5239',
            'ADDRESS'=>'464 Tully Street',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'006',
            'ARTISTNAME'=>'Saiif_ish',
            'NOTELP'=>'206-310-5521',
            'ADDRESS'=>'4794 Owagner Lane',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'007',
            'ARTISTNAME'=>'Corpus_Anima',
            'NOTELP'=>'614-921-3063',
            'ADDRESS'=>'3678 Andell Road',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'008',
            'ARTISTNAME'=>'80.Lvl',
            'NOTELP'=>'912-635-7866',
            'ADDRESS'=>'2238 Yorkie Lane',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'009',
            'ARTISTNAME'=>'Sukabu',
            'NOTELP'=>'620-459-5248',
            'ADDRESS'=>'1637 Breezewood Court',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'ARTCODE'=>'010',
            'ARTISTNAME'=>'Kassondrakahn',
            'NOTELP'=>'518-762-0845',
            'ADDRESS'=>'4215 Joes Road',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);

        

    }
}
