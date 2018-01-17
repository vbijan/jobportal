<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MemberController extends Controller
{
    //

    public function show($id){
    	$member = User::find($id);
    	//dd($member);
    	//dd($member->company_name);

    	return view('member.show',compact('member'));
    }

    public function view($id){
    	$member = User::find($id);

    	return view('member.view',compact('member'));
    }

    public function companies(){
        $companies = User::where('role','1')->get();
         
        return view('member.companies',compact('companies'));
    }

    public function jobseekers(){
        $jobseekers = User::where('role','2')->get();
       
        return view('member.jobseekers',compact('jobseekers'));
    }
}
