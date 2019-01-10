<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Theme extends Model
{
    protected $fillable = ['theme','bible_verse','note','month','year'];
    
    public function imageAvailable(){
        return ($this->image !== null && $this->image !== '' ? true : false);
    }
    public function imageUrl(){
        return asset('storage/images/themes/'.$this->image);
    }
        public function thisMonth(){
        $now = new DateTime();
        return $now->format('F');
    }
}
