<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i < 18; $i++) { 
            $photoId = rand(1, 3);
            DB::table('photos')->insert([
                'title' => "Photo " . $i,
                'path' => "gauto/assets/img/gallery-".$photoId.".jpg"     
            ]);
        }
    }
}
