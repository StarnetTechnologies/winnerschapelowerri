<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Prophetic extends Model
{
    protected $fillable = ['words','bible_verse','note','month','year'];

    public function thisMonth(){
        $now = new DateTime();
        return $now->format('F');
    }
}
