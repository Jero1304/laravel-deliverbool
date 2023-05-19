<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Restaurant;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $type_ids = Type::all()->pluck('id')->all();
        $type_name = Type::all()->get('name');

        // $restaurants = ['Mc Donald', 'Kfc', 'Old Wild West', 'Oro dell\'\etna', 'Fenice Azzurra', 'Sushi World'];
        $restaurants = [
            [
                'name' => 'Mc Donald',
                'type' => 'americano',
            ],
            [
                'name' => 'Kfc',
                'type' => 'fast food',
            ],
            [
                'name' => 'Old Wild West',
                'type' => 'pizzeria',
            ]
            ];
 
        
        foreach ($restaurants as $restaurant) {
            $new_restaurant = new Restaurant();
            $new_restaurant->restaurant_name = $restaurant['name'];
            $new_restaurant->address = $faker->streetAddress();
            $new_restaurant->vat = $faker->regexify('[A-Z]{5}[0-9]{6}');
            // $new_type= new Type();
            // $new_type->name= $restaurant['type'];
            $new_restaurant->save();
            
            if($restaurant['type'] == $type_name) {
                
                $new_restaurant->types()->attach($type_ids);
            };
        }
    
        // if( $restaurant == 'Mc Donald' || ('americano' && $type_name == 'americano') || 'fast food') {

        // }

    }
}
