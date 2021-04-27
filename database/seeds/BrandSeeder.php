<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert([
            'name' => "Toyota",                         
        ]);

        DB::table('brands')->insert([
            'name' => "Honda",                         
        ]);
    }
}
