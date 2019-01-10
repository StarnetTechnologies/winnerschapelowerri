<?php

use Illuminate\Database\Seeder;
use App\Pastor;

class PastorsSeeder extends Seeder
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
                'fullname' => 'Pastor Joseph Ademola Ajibade',
                'position' => 'The Resident Pastor, LFC',
                'bio' => 'A little bio about Pastor Joseph...' 
            ],
            [
                'fullname' => 'Pastor David Akinwunmi Majekodunmi',
                'position' => 'The Assistant Resident Pastor (Pastor 2)',
                'bio' => 'A little bio about Pastor David...' 
            ],
            [
                'fullname' => 'Pastor Kenneth Anyaoha',
                'position' => 'The Associate Pastor, LFC',
                'bio' => 'A little bio about the Pastor Kenneth...' 
            ],
            [
                'fullname' => 'Pastor Azubuike Sigmund',
                'position' => 'The Resident Pastor, LFC',
                'bio' => 'A little bio about the Pastor Azubuike...' 
            ]
        );
        foreach($initials as $i){
            Pastor::create($i);
        }
    }
}
