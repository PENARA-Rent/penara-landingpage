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
        //Car 1
        // DB::table('cars')->insert([
        //     'brand_id' => 1,
        //     'name' => "Camry",
        //     'price' => 250000,           
        //     'description' => "Camry Mobil Mewah",                       
        // ]);

        // DB::table('car_images')->insert([
        //     'car_id' => 1,
        //     'path' => "gauto/assets/img/offer-toyota.png"                      
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 1,
        //     'car_feature_id' => 1,
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 1,
        //     'car_feature_id' => 2,
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 1,
        //     'car_feature_id' => 3,
        // ]);

        // //Car 2
        // DB::table('cars')->insert([
        //     'brand_id' => 2,
        //     'name' => "Jazz",
        //     'price' => 250000,           
        //     'description' => "Jazz Skuyy",                       
        // ]);

        // DB::table('car_images')->insert([
        //     'car_id' => 2,
        //     'path' => "gauto/assets/img/offer-toyota.png"                      
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 2,
        //     'car_feature_id' => 1,
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 2,
        //     'car_feature_id' => 2,
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 2,
        //     'car_feature_id' => 3,
        // ]);

        // //Car 3
        // DB::table('cars')->insert([
        //     'brand_id' => 2,
        //     'name' => "City",
        //     'price' => 250000,           
        //     'description' => "City Asikk",                       
        // ]);

        // DB::table('car_images')->insert([
        //     'car_id' => 3,
        //     'path' => "gauto/assets/img/offer-toyota.png"                      
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 3,
        //     'car_feature_id' => 1,
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 3,
        //     'car_feature_id' => 2,
        // ]);

        // DB::table('car_car_features')->insert([
        //     'car_id' => 3,
        //     'car_feature_id' => 3,
        // ]);

        for ($i=1; $i < 2; $i++) { 
            //Car 3
            DB::table('cars')->insert([
                'brand_id' => 2,
                'name' => "City",
                'price' => 250000,           
                'description' => "City Asikk",                       
            ]);

            DB::table('car_images')->insert([
                'car_id' => $i,
                'path' => "gauto/assets/img/offer-toyota.png"                      
            ]);

            DB::table('car_car_features')->insert([
                'car_id' => $i,
                'car_feature_id' => 1,
            ]);

            DB::table('car_car_features')->insert([
                'car_id' => $i,
                'car_feature_id' => 2,
            ]);

            DB::table('car_car_features')->insert([
                'car_id' => $i,
                'car_feature_id' => 3,
            ]);
        }
        

        
    }
}
