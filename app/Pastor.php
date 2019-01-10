<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastor extends Model
{
    protected $fillable = ['fullname','position','dp','bio'];

    public function dpUrl(){
        $base = 'storage/images/pastors/';
        $url = $base.($this->dp == null || $this->dp == '' ? 'default.png' : $this->dp);
        return asset($url);
    }

}
