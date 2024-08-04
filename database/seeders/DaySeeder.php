<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Day;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $daysOfWeek = [
            
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Saturday',
        ];

        $times = [
            '12:00:00',
            '12:15:00',
            '12:30:00', // 12:00 PM
            '12:45:00', // 12:00 PM
            '13:00:00', // 1:00 PM
            '13:15:00', // 1:00 PM
            '13:30:00', // 1:00 PM
            '13:45:00', // 1:00 PM

            '14:00:00', // 2:00 PM
            '14:15:00', // 2:00 PM
            '14:30:00', // 2:00 PM
            '14:45:00', // 2:00 PM
            '15:00:00', // 3:00 PM
            '15:00:00', // 3:00 PM
            '15:15:00', // 3:00 PM
            '15:30:00', // 3:00 PM
            '16:45:00', // 4:00 PM
            '17:00:00', // 5:00 PM
            '17:15:00', // 5:00 PM
            '17:30:00', // 5:00 PM
            '17:45:00', // 5:00 PM
            '18:00:00', // 6:00 PM
            '18:15:00', // 6:00 PM
            '18:30:00', // 6:00 PM
            '18:45:00', // 6:00 PM


        ];

        foreach ($daysOfWeek as $day) {
            foreach ($times as $time) {
                Day::create([
                    'name' => $day,
                    'time' => $time,
                ]);
            }
        }
    }
}
