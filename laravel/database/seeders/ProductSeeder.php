<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Pangsit Chili Oil',
            'description' => 'Gurih, pedas, dan nikmat! Pangsit premium dengan saus chili oil khas yang menggugah selera. Cocok untuk camilan atau pelengkap hidangan Anda!',
            'image' => 'pangsit.jpeg',
            'no_wa' => '0851-4132-7965',
            'created_at' => '2024-12-17 00:00:00',
            'updated_at' => '2024-12-17 00:00:00',
        ]);
        
        Product::create([
            'title' => 'Rice Bowl Sambal Ikan Suwir',
            'description' => 'Nasi hangat dengan ikan suwir pedas bercita rasa autentik, dipadu sambal khas yang menggugah selera. Lezat, praktis, dan cocok untuk makan siang Anda!',
            'image' => 'rice.jpeg',
            'no_wa' => '0851-4132-7965',
            'created_at' => '2024-12-01 00:00:00',
            'updated_at' => '2024-12-01 00:00:00',
        ]);
    }
}
