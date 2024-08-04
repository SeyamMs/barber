<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Day;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Truncate the services table if necessary
        // DB::table('services')->truncate(); // Comment this if you're encountering foreign key issues

        // Insert services
        DB::table('services')->insert([
            ['name' => 'Baard', 'duration' => 15, 'price' => 15.00, 'currency' =>'€', 'image'=>'https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-100.jpg'],
            ['name' => 'Fade haarsnit', 'duration' => 15, 'price' => 25.00, 'currency' =>'€', 'image'=>'https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-0.jpg'],
            ['name' => 'Klassieke haarsnit', 'duration' => 15, 'price' => 20.00, 'currency' =>'€', 'image'=>'https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-2-1.jpg'],
            ['name' => 'Broske', 'duration' => 15, 'price' => 15.00, 'currency' =>'€', 'image'=>'https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-4.jpg'],
            ['name' => 'Kinderen', 'duration' => 15, 'price' => 15.00, 'currency' =>'€', 'image'=>'https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-3-2.jpg'],
            ['name' => 'Haar en baard', 'duration' => 15, 'price' => 32.50, 'currency' =>'€', 'image'=>'https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-3.jpg'],
        ]);

        // Fetch all services
        $services = Service::all();

        // Fetch all day IDs
        $days = Day::all()->pluck('id')->toArray();

        // Attach all days to each service
        foreach ($services as $service) {
            $service->days()->sync($days);
        }
    }
}
