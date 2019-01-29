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
                'position' => 'The Resident Pastor',
            ],
            [
                'fullname' => 'Pastor Sigmund Ajede',
                'position' => 'State Youth Pastor',
            ],
            [
                'fullname' => 'Pst Innocent Onuoha',
                'position' => 'Associate Pastor',
            ],
            [
                'fullname' => 'Pastor Wisdom Obi',
                'position' => 'The Assistant Resident Pastor',
            ]
        );
        foreach($initials as $i){
            Pastor::create($i);
        }
    }
}
