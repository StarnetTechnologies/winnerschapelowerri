<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $initials = array(
            ['url' => 'winners-chapel-owerri-0-1542948878.jpg'],
            ['url' => 'winners-chapel-owerri-1-1542948878.jpg'],
            ['url' => 'winners-chapel-owerri-2-1542948878.jpg']
        );
        
        foreach($initials as $i){
            Gallery::create($i);
        }
    }
}
