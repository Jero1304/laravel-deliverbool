<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant_id = Reastaurant::all()->pluck('id')->all();
        $products = ['pizza', 'pasta', 'pesce', 'carne', 'hamburger', 'panino', 'sushi'];

        foreach($products as $product) {
            $new_product = new Product();
            $new_product->name = $product;
            $new_product->ingredient = $product;
            $new_product->price = $product;
            $new_product->thumb = $product;
            $new_product->visible = $product;
            $new_product->restaurant_id = $product;
            $nem_product->save();
        }
    }
}
