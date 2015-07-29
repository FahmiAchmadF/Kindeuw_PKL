<?php namespace Kindeuw\Http\Controllers;

use Kindeuw\Http\Controllers\Controller;


use Request;
use Hash;
use Auth;
use Kindeuw\Kindeuw;
use Kindeuw\Model_User;
use DB;
use Validator;
use Input;

class CustomLoginController extends Controller {

	public function getlogin(){
		return view('Kindeuw.Login');
	}

	public function postlogin(){
		$email = Request::input('email');
		$password = Request::input('password');
		
		if(Auth::attempt(['email'=>$email, 'password'=>$password]))
		{	
			$perintah = DB::select('select * from user where email = ?', [$email]);
				$iniuser = $perintah[0];

				$manekinds = Kindeuw::paginate(10);
			 return view('Kindeuw.Administrator.Index', compact('manekinds'));
		}else{
			return redirect('Kindeuw/index/index');
		}
	 }

	 public function logout(){
	 	$email = Auth::user()->email;
	 	Auth::logout($email);

	 	return redirect('Kindeuw/index/index');
	 }

}