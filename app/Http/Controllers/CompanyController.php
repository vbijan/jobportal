<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Company;
use App\User;

class CompanyController extends Controller
{
    public function create(){
    	$category = Category::all();
    	return view('company.create',compact('category'));
    }

    public function store(){
    	$this->validate(request(),[
    		'title'=>'required',
    		'discription'=>'required',
    		'category_id'=>'required',
    		'location'=>'required',
    	]);

    	$model = new Company;
    	$model->title = request('title');
    	$model->discription = request('discription');
    	$model->category_id = request('category_id');
    	$model->location = request('location');
    	if($model->save()){
			\Session::flash('success','Company successfully added.'); 
			return redirect('/company'); 
		}
		\Session::flash('danger','Failed'); 
			return redirect('/company'); 
    }

    public function show(){
        $company = Company::all();
        return view('company.show',[
            'company'=>$company
        ]);
    }

     public function view($id){
        //$task = Task::find($id);
            //return $tasks;
            //dd($tasks);
        $company = User::find($id);
            return view('company.view',[
                'company' => $company
            ]);
    }
}
