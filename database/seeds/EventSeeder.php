<?php

use Illuminate\Database\Seeder;
use App\Event;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $initials = array(
            [
                'title' => 'Sample Event I',
                'description' => 'This is the description of this event',
                'location' => 'Address here...',
                'start_at' => '2018-12-01 00:00:00',
                'end_at' => '2018-12-30 00:00:00',
                'image' => 'event-sample-1.png'
            ],
            [
                'title' => 'Sample Event II',
                'description' => 'This is the description of this event',
                'location' => 'Address here...',
                'start_at' => '2018-12-5 00:00:00',
                'end_at' => '2018-12-12 00:00:00',
                'image' => 'event-sample-2.png'
            ]
        );

        foreach($initials as $i){
            Event::create($i);
        }
    }
}
