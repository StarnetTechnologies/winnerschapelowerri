<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['name','about','slug'];

	public function about($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->about == null ? '': str_limit(strip_tags($this->about),200).'<a href="'.route('unit',$this->slug).'">read more</a>';
		}
        return $this->about == null ? '': $this->about;
	}
}
