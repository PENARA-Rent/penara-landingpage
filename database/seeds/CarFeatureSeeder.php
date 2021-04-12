<?php

use Illuminate\Database\Seeder;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('car_features')->insert([
            'title' => "Model:2018",             
            'icon_class' => "fa fa-car",                       
        ]);

        DB::table('car_features')->insert([
            'title' => "Automatic",             
            'icon_class' => "fa fa-cogs",                       
        ]);

        DB::table('car_features')->insert([
            'title' => "20.000KM",             
            'icon_class' => "fa fa-dashboard",                       
        ]);
    }
}
