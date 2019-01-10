<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $fillable = ['name','email','title','testimony','approval'];

    public function approved(){
        return $this->approval === 1 ? true : false; 
    }
}
