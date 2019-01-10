<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
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
                'title' => 'Sample Service I',
                'note' => 'This is the note about this service',
                'location' => 'Address here...',
                'day' =>  'Wednesday',
                'start' => '07:00:00',
                'end' => '09:00:00'
            ],
            [
                'title' => 'Sample Service II',
                'note' => 'This is the note about this service II',
                'location' => 'Address here...',
                'day' =>  'Saturday',
                'start' => '07:00:00',
                'end' => '09:00:00'
            ],
            [
                'title' => 'Sample Service III',
                'note' => 'This is the note about this service III',
                'location' => 'Address here...',
                'day' =>  'Sunday',
                'start' => '07:00:00',
                'end' => '09:00:00'
            ]
                );

        foreach($initials as $i){
            Service::create($i);
        }
    
    }
}
