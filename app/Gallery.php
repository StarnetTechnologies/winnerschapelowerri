<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['url','caption','role'];

    public function imageUrl(){
        return asset('storage/images/gallery/'.$this->url);
    }
}
