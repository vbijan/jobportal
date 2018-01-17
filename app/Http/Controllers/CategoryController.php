<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Job;

class CategoryController extends Controller
{
    public function create(){
    	return view('category.create');
    }

    public function store(){
    	$this->validate(request(),[
    		'title'=>'required',
    		'discription'=>'required',
    	]);

    	$model = new Category;
    	$model->title = request('title');
    	$model->discription = request('discription');

		if($model->save()){
			\Session::flash('success','Category successfully added.'); 
			return redirect('/category'); 
		}
		\Session::flash('danger','Failed'); 
			return redirect('/category'); 
    	

    }

    public function show(){
        //dd($category);
        $category = Category::all();

        return view('category.show',[
            'category'=>$category
        ]);
    }

    public function jobs($id){
        
        $jobs = Job::where('category_id', $id)->get();
       
        $category = Category::all();
        return view('category.jobs',compact('jobs','category'));
    }

    public function edit($id){
        $old = Category::find($id);
        return view('category.edit',compact('old','id'));

    }

    public function update($id)
    {
        //dd($request->get());
        $request = request();
        $category = Category::find($id);
        $category->title = $request->get('title');
        $category->discription = $request->get('discription');
        $category->save();
        \Session::flash('success','Category successfully edited.'); 
        return redirect('show_category');
    }

    public function destroy($id){
         //dd($id);
        $category = Category::find($id);

         $category->delete();

        \Session::flash('success','Category successfully deleted.'); 
        return redirect('show_category');
    }
}
