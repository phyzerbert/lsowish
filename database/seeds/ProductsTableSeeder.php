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
            'name' => 'iPhone 12 Pro Max',
            'price' => '5299',
            'quantity' => 50,
            'image' => 'images/product/12_pro_max.png',
            'image2' => 'images/product/12_pro_max.png',
        ]);
        Product::create([
            'name' => 'iPhone 12 Pro',
            'price' => '4899',
            'quantity' => 50,
            'image' => 'images/product/12_pro.png',
            'image2' => 'images/product/12_pro.png',
        ]);
        Product::create([
            'name' => 'iPhone 12',
            'price' => '3899',
            'quantity' => 50,
            'image' => 'images/product/12.png',
            'image2' => 'images/product/12.png',
        ]);
        Product::create([
            'name' => 'iPad',
            'price' => '3499',
            'quantity' => 50,
            'image' => 'images/product/ipad.png',
            'image2' => 'images/product/ipad.png',
        ]);
        Product::create([
            'name' => 'Apple Watch Series 6',
            'price' => '1749',
            'quantity' => 500,
            'image' => 'images/product/apple_watch_series_6.jpg',
            'image2' => 'images/product/apple_watch_series_6.jpg',
        ]);
        Product::create([
            'name' => 'Apple Watch SE',
            'price' => '1199',
            'quantity' => 500,
            'image' => 'images/product/apple_watch_se.jpg',
            'image2' => 'images/product/apple_watch_se.jpg',
        ]);
        Product::create([
            'name' => 'Apple Watch Series 3',
            'price' => '849',
            'quantity' => 500,
            'image' => 'images/product/apple_watch_series_3.jpg',
            'image2' => 'images/product/apple_watch_series_3.jpg',
        ]);
        Product::create([
            'name' => 'AirPods Pro',
            'price' => '1099',
            'quantity' => 5000,
            'image' => 'images/product/airpods_pro.jpg',
            'image2' => 'images/product/airpods_pro.jpg',
        ]);
        Product::create([
            'name' => 'AirPods',
            'price' => '699',
            'quantity' => 500,
            'image' => 'images/product/airpods.jpg',
            'image2' => 'images/product/airpods.jpg',
        ]);
    }
}
