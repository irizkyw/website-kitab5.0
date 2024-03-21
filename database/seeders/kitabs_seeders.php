<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kitabs_seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kitabs')->insert([[
            'kitab' => "RegVeda",
            'agama' => "Hindu",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kitab' => "Al-Quran",
            'agama' => "Islam",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kitab' => "Injil",
            'agama' => "Kristen Protestan",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kitab' => "Injil",
            'agama' => "Kristen Katolik",
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kitab' => "Sishu Wujing",
            'agama' => "Konghucu",
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
