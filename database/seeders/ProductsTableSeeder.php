<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('products')->insert([
            [
                'name' => 'Charming Ruffle Dress',
                'imageLink' => 'https://i.pinimg.com/736x/b1/f3/93/b1f393fb091d6cb423a17ddfa63b6944.jpg',
                'category_id' => '1',
                'brand_id' => '2',
                'price' => 140000,
                'stock' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Elegant A-Line Dress',
                'imageLink' => 'https://i.pinimg.com/736x/e0/f6/5b/e0f65b6a8c09806549a899ccb2a9802a.jpg',
                'category_id' => '1',
                'brand_id' => '2',
                'price' => 90000,
                'stock' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'One Set Brow Casual',
                'imageLink' => 'https://i.pinimg.com/736x/9f/b2/13/9fb21381497f1fe159096f0260e64576.jpg',
                'category_id' => 1,
                'brand_id' => 1,
                'price' => 100000,
                'stock' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Ichigo Bow Skirt',
                'imageLink' => 'https://i.pinimg.com/736x/f0/0a/d6/f00ad6b55f2bf04bdea5ea60c059a812.jpg',
                'category_id' => 2,
                'brand_id' => 5,
                'price' => 150000,
                'stock' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'White Cardy',
                'imageLink' => 'https://i.pinimg.com/736x/e2/54/a1/e254a12a78587860ab2978220c275376.jpg',
                'category_id' => 3,
                'brand_id' => 3,
                'price' => 80000,
                'stock' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Pink Bow Cargo',
                'imageLink' => 'https://i.pinimg.com/736x/1c/22/51/1c225103219526f36e1e696e50f81d05.jpg',
                'category_id' => 4,
                'brand_id' => 2,
                'price' => 200000,
                'stock' => 9,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'White Chamy Pants',
                'imageLink' => 'https://i.pinimg.com/736x/c8/89/37/c889374ca3b423eef30f24f5186f2677.jpg',
                'category_id' => 4,
                'brand_id' => 1,
                'price' => 240000,
                'stock' => 6,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Red Bow Dress',
                'imageLink' => 'https://i.pinimg.com/736x/91/36/f7/9136f70a0db8e22df90c0293e4a1c1c0.jpg',
                'category_id' => 1,
                'brand_id' => 3,
                'price' => 290000,
                'stock' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Black Jeans Dress',
                'imageLink' => 'https://i.pinimg.com/736x/f1/a4/b2/f1a4b27388c52d40064d3b6589ff9756.jpg',
                'category_id' => 1,
                'brand_id' => 2,
                'price' => 260000,
                'stock' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Black Belt Dress',
                'imageLink' => 'https://i.pinimg.com/736x/dd/c0/df/ddc0df2108b416f58ce78b6c474fdbca.jpg',
                'category_id' => 1,
                'brand_id' => 6,
                'price' => 190000,
                'stock' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
