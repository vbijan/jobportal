<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Job;
use Auth;

class JobController extends Controller
{

    public function index(){
        $category = Category::all();
        $jobs = Job::all();
        return view('job.index',[
            'jobs'=>$jobs,
            'category'=>$category,
        ]);
    }
    public function create(){

    	$category = Category::all();
    	//$company = Company::all();
    	return view('job.create',compact('category'));
    }

    public function store(){
    	$this->validate(request(),[
    		'title'=>'required',
    		'discription'=>'required',
    		'category_id'=>'required',
    		'company_id'=>'required',
            'end_date'=>'required',
    	]);
       // dd(request('company_id'));
    	$job = new Job;

    	$job->title = request('title');
    	$job->discription = request('discription');
    	$job->experience = request('experience');
    	$job->position = request('position');
    	$job->opening = request('opening');
    	$job->salary = request('salary');
    	$job->category_id = request('category_id');
    	$job->company_id = request('company_id');
        //dd(request('end_date'));
        $job->end_date = request('end_date');

    	if($job->save()){
    		\Session::flash('success','Job successfully created.'); 
			return redirect('/job'); 
    	}
    	\Session::flash('danger','Failed'); 
			return redirect('/job'); 

    }
    public function show(){
        $jobs = Job::where('company_id','=', Auth::id())->get();
        return view('job.show',[
            'jobs'=>$jobs
        ]);    
    }

    public function view(Job $job){
        //$task = Task::find($id);
            //return $tasks;
            //dd($tasks);
            return view('job.view',[
                'job' => $job
            ]);
    }
    
}
