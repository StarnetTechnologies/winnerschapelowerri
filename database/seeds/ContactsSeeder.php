<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'address' => '97, PH Road, Beside GTBank, Owerri',
            'phone1' => '1234567890',
            'phone2' => '0987654321',
            'email' => 'winners@chapel.com',
            'facebook'  => 'https://facebook.com/',
            'instagram' => 'https://instagram.com/',
            'twitter' => 'https://twitter.com/',
            'youtube' => 'https://youtube.com/'
        ]);
    }
}
