<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\Member;

class DashboardController extends Controller
{
    public function index(){
    	$jobs = Job::all();
    	$category = Category::all();
    	return view('dashboard.index',compact('jobs','category'));
    }


    /*public function getLogouts(){

        return 'here';
        //Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }*/

    public function logins(){
        return view('dashboard.logins');
    }

    public function store(){
        $username = request('user_id');
        $password = bcrypt(request('password'));
       // dd($password);
        $login = Member::where('user_id',$username)->get();

        //dd($login);

        if(!empty($login)){
             $request = request();
            //auth()->login($member);
            $member = DB::table('members')->where('user_id', $username)->first();

            //dd($member);
            $request->session()->put('member', $member);
            return redirect()->home()->with('data', $member);
        }

        return redirect('dashboard.logins');
       
        
    }
}
