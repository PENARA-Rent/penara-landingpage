<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cars')->insert([
            'brand_id' => 1,
            'name' => "Camry",
            'price' => 250000,           
            'description' => "Camry Mobil Mewah",                       
        ]);

        DB::table('car_images')->insert([
            'car_id' => 1,
            'path' => "gauto/assets/img/offer-toyota.png"                      
        ]);

        DB::table('car_car_features')->insert([
            'car_id' => 1,
            'car_feature_id' => 1,
        ]);

        DB::table('car_car_features')->insert([
            'car_id' => 1,
            'car_feature_id' => 2,
        ]);

        DB::table('car_car_features')->insert([
            'car_id' => 1,
            'car_feature_id' => 3,
        ]);
        

        
    }
}
