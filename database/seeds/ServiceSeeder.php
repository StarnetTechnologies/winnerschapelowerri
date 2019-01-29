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
                'title' => 'Special Healing Service',
                'day' =>  'Tuesday',
                'start' => '10:00:00',
                'end' => '12:00:00'
            ],
            [
                'title' => 'Communion Service',
                'day' =>  'Wednesday',
                'start' => '17:00:00',
                'end' => '18:40:00'
            ],
            [
                'title' => 'Sunday First Service',
                'day' =>  'Sunday',
                'start' => '06:30:00',
                'end' => '08:30:00'
            ],
            [
                'title' => 'Sunday Second Service',
                'day' =>  'Sunday',
                'start' => '08:30:00',
                'end' => '10:30:00'
            ],
            [
                'title' => 'Sunday Third Service',
                'day' =>  'Sunday',
                'start' => '10:30:00',
                'end' => '12:30:00'
            ],
            [
                'title' => 'Home Cell (WSF)',
                'note' => 'Holds at different <a href="'.route('wsf').'">WSF locations</a>',
                'day' =>  'Sunday',
                'start' => '06:30:00',
                'end' => '08:30:00'
            ]


                );

        foreach($initials as $i){
            Service::create($i);
        }
    
    }
}
