<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Sample event data
        Event::create([
            'event_title' => 'Sample Event 1',
            'event_start_date' => '2023-07-20 10:00:00',
            'event_end_date' => '2023-07-20 14:00:00',
            'organization_id' => 1,
        ]);

        Event::create([
            'event_title' => 'Sample Event 2',
            'event_start_date' => '2023-07-21 09:00:00',
            'event_end_date' => '2023-07-21 12:00:00',
            'organization_id' => 1,
        ]);

        // Add more sample events as needed
    }
}
