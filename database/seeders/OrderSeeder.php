<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Order;
use App\Models\Restaurant;
use Faker\Generator as Faker;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        $product_ids = Product::all()->pluck('id');

        for ($i = 0; $i < 30; $i++) {
            $order = new Order();
            $order->date = $faker->date();
            $order->code = $faker->lexify('id-????');
            $order->address = $faker->sentence(3);
            $order->total_price = $faker->randomFloat(2, 5, 30);
            $order->save();

            $order->products()->attach($faker->randomElements($product_ids, rand(0, 5)));
        }
    }
}
