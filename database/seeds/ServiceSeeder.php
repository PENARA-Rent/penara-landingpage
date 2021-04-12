<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Start Service 1
        DB::table('services')->insert([
            'title' => "Antar Kota",
            'description' => "Risus commodo maecenas accumsan lacus vel facilisis. Lorem ipsum dolor consectetur adipiscing elit.",           
            'icon_path' => "gauto/assets/img/airport-transport.png",            
            'image_path' => "gauto/assets/img/service-details-1.jpg"            
        ]);

        DB::table('service_points')->insert([
            'service_id' => 1,
            'value' => "Point Lorem Ipsum 1",            
        ]);

        DB::table('service_points')->insert([
            'service_id' => 1,
            'value' => "Point Lorem Ipsum 2",            
        ]);

        DB::table('service_points')->insert([
            'service_id' => 1,
            'value' => "Point Lorem Ipsum 3",            
        ]);

        DB::table('service_faqs')->insert([
            'service_id' => 1,
            'question' => "This is Question",            
            'answer' => "This is Answer",            
        ]);
        // End Service 1

        // Start Service 2
        DB::table('services')->insert([
            'title' => "Acara Pernikahan",
            'description' => "Risus commodo maecenas accumsan lacus vel facilisis. Lorem ipsum dolor consectetur adipiscing elit.",           
            'icon_path' => "gauto/assets/img/wedding-ceremony.png",            
            'image_path' => "gauto/assets/img/service-details-1.jpg"            
        ]);

        DB::table('service_points')->insert([
            'service_id' => 2,
            'value' => "Point Lorem Ipsum 1",            
        ]);

        DB::table('service_points')->insert([
            'service_id' => 2,
            'value' => "Point Lorem Ipsum 2",            
        ]);

        DB::table('service_points')->insert([
            'service_id' => 2,
            'value' => "Point Lorem Ipsum 3",            
        ]);

        DB::table('service_points')->insert([
            'service_id' => 2,
            'value' => "Point Lorem Ipsum 4",            
        ]);

        DB::table('service_faqs')->insert([
            'service_id' => 2,
            'question' => "This is Question",            
            'answer' => "This is Answer",            
        ]);

        DB::table('service_faqs')->insert([
            'service_id' => 2,
            'question' => "This is Question",            
            'answer' => "This is Answer",            
        ]);
        // End Service 2
    }
}
