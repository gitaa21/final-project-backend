<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('users')->insert([
            [
                'username' => 'Dazai Osamu',
                'email' => 'dazai@gmail.com',
                'password' => Hash::make('dazaibsd'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'Chuuya Nakahara',
                'email' => 'chuuya@gmail.com',
                'password' => Hash::make('chuuyabsd'),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
