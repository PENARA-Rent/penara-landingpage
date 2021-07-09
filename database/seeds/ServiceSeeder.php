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
            'description' => "Kami adalah solusi kebutuhan transportasi Anda. Kami merupakan penyedia jasa sewa kendaraan / rental mobil Include Driver yang profesional untuk melayani keperluan bisnis, keluarga maupun liburan Anda.",           
            'icon_path' => "gauto/assets/img/city-transport.png",            
            'image_path' => "gauto/assets/img/service-details-1.jpg"            
        ]);

        
        // End Service 1

        // Start Service 2
        DB::table('services')->insert([
            'title' => "Acara Pernikahan",
            'description' => "Kami melayani penyewaan mobil untuk acara pernikahan seperti, mobil pengantin dan mobil keluarga.",           
            'icon_path' => "gauto/assets/img/wedding-ceremony.png",            
            'image_path' => "gauto/assets/img/service-details-1.jpg"            
        ]);        
        // End Service 2

        // Start Service 2
        DB::table('services')->insert([
            'title' => "Antar Jemput Bandara",
            'description' => "Kami melayani jasa Antar-Jemput Bandara di seluruh Indonesia.
            ",           
            'icon_path' => "gauto/assets/img/airport-transport.png",            
            'image_path' => "gauto/assets/img/service-details-1.jpg"            
        ]);        
        // End Service 2
    }
}
