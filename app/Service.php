<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title','day','start','end','note'];

    function normalTime($time){
        $s = explode(':',$time);
        $hour = $s[0];
        $minute = $s[1];
        $meridiem = 'AM';
       if($hour >= 12 ){
           $hour = $s[0] - 12;
           $minute = $s[1];
           $meridiem = 'PM';
       }
       return $hour.':'.$minute.' '.$meridiem;
    }
}
