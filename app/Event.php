<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
class Event extends Model
{
    protected $fillable = ['title','description','location','start_at','end_at'];


    public function imageUrl(){
        return ($this->image !== null && $this->image !=='' ? asset('storage/images/events/'.$this->image) : asset('storage/images/events/default.png'));
    }
    public function now(){
        return new DateTime();
    }

    public function startDate(){
        return new DateTime($this->start_at);
    }

    public function endDate(){
        return new DateTime($this->end_at);
    }
    
    public function isUpcoming(){  
        if($this->startDate() > $this->now()){
            return true;
        }
        return false;
    }

    public function beforeStart(){
         return $this->now()->diff($this->startDate());
    }

    public function afterStart(){
        return $this->startDate()->diff($this->now());
    }
    public function howFar(){
        $howfar = " ";
        $days = $this->afterStart()->d;
        $hours = $this->afterStart()->h;
        $minutes = $this->afterStart()->i;
        $seconds = $this->afterStart()->s;

        if($days > 0){
            $howfar = "$days days ago";
        }
        else if($hours > 0){
            $howfar = "$hours h, $minutes min ago";
        }
        else if($minutes > 0){
            $howfar = "$minutes min ago";
        }
        else{
            $howfar = "$seconds seconds ago";
        }
        return $howfar;
    }

    public function beforeEnd(){
        return $this->now()->diff($this->endDate());
   }

   public function to12Hours($date){
        return $date->format('g').':'.$date->format('i').$date->format('a');
    }
}
