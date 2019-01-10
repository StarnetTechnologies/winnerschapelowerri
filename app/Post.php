<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','image','slug'];

    public function imageUrl(){
        return ($this->image !== null && $this->image !=='' ? asset('storage/images/posts/'.$this->image) : asset('storage/images/posts/default.png'));
    }
}
