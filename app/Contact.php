<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'address',
        'phone1',
        'phone2',
        'email',
        'facebook',
        'instagram',
        'twitter',
        'youtube'
    ];
}
