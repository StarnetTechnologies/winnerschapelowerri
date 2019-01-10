<?php

use Illuminate\Database\Seeder;
use App\Notification;

class NotificationsSeeder extends Seeder
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
                'purpose' => 'New Event',
                'heading' => 'New Event Added - {{title}}',
                'body' => '{{description}}'
            ],
            [
                'purpose' => 'Event Update',
                'heading' => 'The event {{title}} has been updated',
                'body' => '{{description}}'
            ],
            [
                'purpose' => 'New Service',
                'heading' => 'New Service Added - {{title}}',
                'body' => '{{description}}'
            ],
            [
                'purpose' => 'Service Update',
                'heading' => 'The service {{title}} has been updated',
                'body' => '{{description}}'
            ]
        );

        foreach($initials as $i){
            Notification::create($i) ;    
              }

    }
}
