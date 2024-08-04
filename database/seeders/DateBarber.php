<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DateBarber extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(ServiceSeeder::class);

        // Retrieve the services
        $services = DB::table('services')->pluck('name');

        $startDate = Carbon::create(2024, 8, 5);
        $endDate = Carbon::create(2025, 8, 5);
        $times = ['12:00', '12:30', '13:00', '13:30', '14:00'];

        while ($startDate->lte($endDate)) {
            foreach ($times as $time) {
                DB::table('date_barbers')->insert([
                    'date' => $startDate->toDateString(),
                    'time' => $time,
                    'name' => $services->random(), 
                    'status' => false, // Set status as boolean
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            $startDate->addDay();
        }
    }
}
