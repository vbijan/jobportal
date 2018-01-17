<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;

class RegisterController extends Controller
{
    //

    public function jobseeker_register(){
    	return view('register.create');
    }

    public function store(){
    	$this->validate(request(),[
    		'full_name'=>'required',
    		'email'=>'required',
    		'password' => 'required',
    		'mobile'=>'required'
    	]);

       // dd(request('role'));
        $user = new User();
    	/*$user = User::create([
            'name'=> request('full_name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),

            'dob'=> request('dob'),
            'marital_status' => request('marital_status'),
            'home_address'=>request('home_address'),
            'home_number'=> request('home_number'),
            'mobile' => request('mobile'),
            'role'=>request('role'),
        ]);*/
        $user->name= request('full_name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->dob= request('dob');
        $user->marital_status = request('marital_status');
        $user->home_address=request('home_address');
        $user->home_number= request('home_number');
        $user->mobile = request('mobile');
        $user->role='2';
        $user->save();
    		
        auth()->login($user);
       // return redirect()->home();
        return redirect()->home();
    }


    public function employer_register(){
    	$category = Category::all();
    	return view('register.signup',compact('category'));
    }


    public function insert(){
        $this->validate(request(),[
            'company_name'=>'required',
            'full_name'=>'required',
            'email'=>'required',
            'password' => 'required',
            'mobile'=>'required',
            'category_id'=>'required',
            'ownership'=>'required'
        ]);
        $user = new User();
        $user->name= request('full_name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->company_name= request('company_name');
        $user->company_address= request('company_address');
        $user->category_id = request('category_id');
        $user->ownership=request('ownership');
        $user->office_number= request('office_number');
        $user->employee_type = request('employee_type');
        $user->no_of_employees= request('no_of_employees');
        $user->mobile = request('mobile');
        $user->role='1';

        //$request = request();
        $image = request('logo');
       // dd($image);
       // $extension = $image->extension();
       // dd($extension);

        $name = request('full_name').'.'.$image->getClientOriginalExtension();
       // dd($name);

          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
        request('logo')->move(public_path('logos'), $name);
        $user->logo = $name;
        $user->save();

        auth()->login($user);
       // return redirect()->home();
        return redirect()->home();
    }
}
