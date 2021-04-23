<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ServiceSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CarFeatureSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(PhotoSeeder::class);
    }
}
