<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

	protected $fillable = ['title','discription','position','salary','experience','opening','company_id','category_id','end_date'];
	
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function member(){
    	return $this->belongsTo('App\Member');
    }
}
