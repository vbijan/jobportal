<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =  [
        'title', 'discription',
    ];

    public function jobs(){
    	return $this->hasMany('App\Job');
 
    }

    public function companies(){
    	return $this->hasMany('App\Company');
 
    }

     public function member(){
    	return $this->hasMany('App\Member');
    }
}


