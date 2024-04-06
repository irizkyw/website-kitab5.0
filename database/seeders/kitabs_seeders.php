<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class kitabs_seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([[
            'books' => "RegVeda",
            'agama' => "Hindu",
            'API_Gateaway' => 'a',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'books' => "Al-Quran",
            'agama' => "Islam",
            'API_Gateaway' => 'a',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'books' => "Injil",
            'agama' => "Kristen Protestan",
            'API_Gateaway' => 'a',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'books' => "Injil",
            'agama' => "Kristen Katolik",
            'API_Gateaway' => 'a',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'books' => "Sishu Wujing",
            'agama' => "Konghucu",
            'API_Gateaway' => 'a',
            'created_at' => now(),
            'updated_at' => now(),
        ]]);

        DB::table('users')->insert([[
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'userType' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('client123'),
            'userType' => 'client',
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
