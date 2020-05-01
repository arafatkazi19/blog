<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Visitor;
use App\Blog;
use Session;

class SignupController extends Controller
{
    //
	public function index(){
		return view('front.user.sign-up',[
			'categories'=>Category::where('publication_status',1)->get(),

		]);
	}

	public function newSignUp(Request $request){
		Visitor::saveVisitorInfo($request);
		return redirect('/');
	}

	public function visitorLogout(Request $request){
		Session::forget('visitorId');
		Session::forget('visitorName');

		return redirect('/');

	}

	public function visitorLogin(){
		return view('front.user.sign-in',[
			'categories'=>Category::where('publication_status',1)->get(),

		]);
	}

	public function visitorSignIn(Request $request){
		$visitor = Visitor::where('email_address',$request->email_address)->first();

		if ($visitor) {
			if (password_verify($request->password, $visitor->password)) {
				Session::put('visitorId',$visitor->id);
				Session::put('visitorName',$visitor->first_name.' '.$visitor->last_name);
				return redirect('/');
			} else{
				return redirect('/visitor-login')->with('message','Password not valid');
			}
		} else{
			return redirect('/visitor-login')->with('message','Email not valid');
		}
	}

   //This function is for raw Ajax
    // public function emailCheck($email){
    // 	$visitor = Visitor::where('email_address',$email)->first();

    // 	if ($visitor) {
    // 		echo "Email adress exist.Try again!";
    // 	} else{
    // 		echo "Email adress available";
    // 	}

    // }


        public function emailCheck($email){
    	$visitor = Visitor::where('email_address',$email)->first();

    	if ($visitor) {
    		return json_encode('Email adress exist.Try again!');
    	} else{
    		return json_encode('Email adress available');
    	}

    }

}
