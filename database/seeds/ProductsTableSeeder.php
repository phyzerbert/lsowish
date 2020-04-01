<?php

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => '3ply Mask',
            'price' => '5.00',
            'quantity' => 5000,
            'image' => 'images/product/3ply_mask.jpg',
        ]);

        Product::create([
            'name' => 'N95 3M Mask',
            'price' => '5.00',
            'quantity' => 5000,
            'image' => 'images/product/n95_3m_mask.jpg',
        ]);

        Product::create([
            'name' => 'Hand Sanitizer',
            'price' => '5.00',
            'quantity' => 5000,
            'image' => 'images/product/hand_sanitizer.jpg',
        ]);

        Product::create([
            'name' => 'Defend Healthtag',
            'price' => '5.00',
            'quantity' => 5000,
            'image' => 'images/product/defend_health_tag.jpg',
        ]);
    }
}
