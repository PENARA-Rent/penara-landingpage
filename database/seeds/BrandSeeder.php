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

        DB::table('brands')->insert([
            'name' => "Wuling",
        ]);

        DB::table('brands')->insert([
            'name' => "Mitsubishi",
        ]);

        DB::table('brands')->insert([
            'name' => "Suzuki",
        ]);
    }
}
