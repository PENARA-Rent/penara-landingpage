<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Januar',            
            'email' => 'januarelsan@gmail.com',
            'password' => Hash::make('qwerty123'),
        ]);
    }
}