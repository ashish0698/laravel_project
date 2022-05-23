<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Cart;
use Session;

class MainController extends Controller
{
	function register(){
		return view('register');
	}

	function login(){
		return view('login');
	}


	

// validation of form

	function save(Request $request){
		//validation in register page

		$request->validate([
			'email'=>'required|email|unique:admins',
			'password'=>'required',
			'cpassword'=>'required|same:password'

		]);
		//Inseert data into datbase
		$admin = new Admin;
		$admin->email = $request->email;
		$admin->password = Hash::make($request->password);
		$admin->cpassword =Hash::make($request->cpassword);
		$save = $admin->save();

		if ($save) {
			return redirect('login');
			
		}else{
			return back()->with('fail','something went wrong');
		}

	}




	function check(Request $request){
		//validation on login form

		$request->validate([
			'email'=>'required|email',
			'password'=>'required'

		]);
			

		//Taking email from database and LOGIN

		$userInfo = Admin::where('email','=',$request->email)->first();

		//If email exists Then check for password

		if($userInfo){

			//checking for password

			if(Hash::check($request->password, $userInfo->password)){
				$request->session()->put('LoggedUser', 	$userInfo->id);
				return redirect('dashboard');
			}else{
				return back()->with('fail','Incorrect password');	
			}
			
		}else{
			return back()->with('fail','Email not in Database');
			
		}
	}

	//PRODUCT CONTROLLER FROM HERE !!!!!

	function dashboard(){
		$data = Product::all();

		return view('dashboard',['products'=>$data]);
	}



	function addToCart(Request $request)
	{
		if($request->session()->has('LoggedUser'))
		{
			$cart = new Cart;
			$cart->user_id=$request->session()->get('LoggedUser');
			$cart->product_id=$request->item_id;
			$cart->save();
			return redirect('dashboard');

		}
		
		else
		{
			return redirect('login');
		}
	}



	static function cartItem()
	{
		$userId = Session::get('LoggedUser');
		return Cart::where('user_id' ,$userId)->count();

	}


    
}
