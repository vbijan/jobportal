<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //

    protected $fillable = ['full_name','user_id','email','re_email','marital_status','dob','company_name','home_address','city','postal_code','home_number','office_number','mobile','pager','home_url','password','company_address','category_id','ownership','employee_type','no_of_employees','company_benefits','location','logo','member_type'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function job(){
    	return $this->belongsTo('App\Job');
    }
}
