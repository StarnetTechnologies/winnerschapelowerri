<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $fillable = ['welcome_address','pastor_id','front_image'];

    public function imageAvailable(){
        return ($this->front_image !== null && $this->front_image !== ''  ? true : false);
    }
    public function frontImageUrl(){
        return asset('storage/images/assets/'.$this->front_image);
    }
    public function pastor(){
        return $this->belongsTo('App\Pastor');
    }
}
