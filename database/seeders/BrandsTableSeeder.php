<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('brands')->insert([
            [
                'name' => 'Neko Threads',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Mochi Wear',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Tori Trend',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Minaga Brand',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Haruiko',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Tori Trend',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
