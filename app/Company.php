<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['title','discription','location','category_id'];

    public function categories(){
    	return $this->belongsTo('App\Category');
    }
}
