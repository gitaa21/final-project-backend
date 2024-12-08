<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('categories')->insert([
            [
                'name' => 'Dresses',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Skirt',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
    
                'name' => 'Cardigan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Pants',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
