<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'image' => 'https://cdn.shopify.com/s/files/1/0015/0002/products/FootpathFoundationShirt_1024x1024.jpg?v=1562954588',
            'title' => 'abnation',
            'description' => 'Its my tshirt in good colors',
            'price' => 100
        ]);

        $product->save();

        // factory(App\Product::class, 30)->create();
    }
}
