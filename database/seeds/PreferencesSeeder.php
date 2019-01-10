<?php

use Illuminate\Database\Seeder;
use App\Preference;

class PreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preference::create([
            'welcome_address' => 'It is with great delight and excitement that we welcome you to Living Faith Church Owerri (LFCWW) otherwise known as Winners’ Chapel, International. Our global membership is referred to as the Winners’ Family. As you decide to join the chariots of the Winners Family today, I see the mighty hands of God resting upon your life for total transformation.You are blessed.',
            'pastor_id' => 1,
            'front_image' => '1542948479-pastor-joseph-ademola-ajibade.jpg'
        ]);
    }
}
