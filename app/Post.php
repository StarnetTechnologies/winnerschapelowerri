<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','image','slug'];

    public function imageUrl(){
        return ($this->image !== null && $this->image !=='' ? asset('storage/images/posts/'.$this->image) : asset('storage/images/posts/default.png'));
    }
	public function content($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->body == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No address </small>': str_limit(strip_tags($this->body),200).'  <a href="'.route('single.post',$this->slug).'">continue reading</a>';
		}
		return $this->body == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No address </small>': $this->body;
	}
}
