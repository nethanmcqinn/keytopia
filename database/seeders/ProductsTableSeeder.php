<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Text Editor',
            'description' => '',
            'price' => 225.00,
            'stock' => 10,
            'features' => "Start Editor\nNextor Series\nMX Creative Console\nAdvanced optical and support for intuitive control",
            'button_text' => 'Add to cart',
            'type' => 'bullet'
        ]);

        Product::create([
            'name' => 'POP Icon Keys',
            'description' => 'A compact, written keyboard with back design on...',
            'price' => 9.90,
            'stock' => 50,
            'button_text' => 'Buy Now',
            'type' => 'paragraph'
        ]);

        Product::create([
            'name' => 'Special Offer',
            'description' => '',
            'price' => 0.00,
            'stock' => 0,
            'features' => "Special Offer\nStart Seller\nSpecial Offer",
            'button_text' => 'View Options',
            'type' => 'bullet'
        ]);
    }
}