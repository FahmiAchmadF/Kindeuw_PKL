<?php namespace Kindeuw\Http\Controllers;

use Kindeuw\Http\Controllers\Controller;
use Kindeuw\Http\Requests;
use Request;
use Hash;
use Auth;
use Kindeuw\Kindeuw;
use Kindeuw\Model_User;
use DB;
use Validator;
use Input;

class CustomLoginController extends Controller {


	public function index(){
		$username = Auth::user()->username;
		$manekinds = Kindeuw::paginate(10);

		return view('Kindeuw.Administrator.Index', compact('username', 'manekinds'));

	}
	public function getlogin(){
		return view('Kindeuw.Login');
	}

	public function postlogin(){
		$email = Request::input('email');
		$password = Request::input('password');
		
		if(Auth::attempt(['email'=>$email, 'password'=>$password]))
		{	
			$username = Auth::user()->username;

				$manekinds = Kindeuw::paginate(10);
			 return view('Kindeuw.Administrator.Index', compact('manekinds', 'username'));
		}else{
			return redirect('index');
		}
	 }

	 public function logout(){
	 	$email = Auth::user()->email;
	 	Auth::logout($email);

	 	return redirect('index');
	 }

	 public function baca($id){
		$show = Kindeuw::find($id);
	    $username = Auth::user()->username;
		return view('Kindeuw.Administrator.Baca', compact('show', 'username'));
	}

	public function cari(){
		$username = Auth::user()->username;
        $searchterm = Request::input('cari1');
		    if ($searchterm == '0') {
                	return view('Kindeuw.Administrator.Searchfail', compact('results', 'searchterm', 'username'));
                }elseif ($searchterm == '') {
                	return view('Kindeuw.Administrator.Searchfail', compact('results', 'searchterm', 'username'));
                }elseif ($searchterm == ' ') {
                	return view('Kindeuw.Administrator.Searchfail', compact('results', 'searchterm', 'username'));
                }else{
                	    $products = DB::table('books');
            			$results = $products->where('id', 'LIKE', '%'. $searchterm .'%')
                		->orWhere('Judul', 'LIKE', '%'. $searchterm .'%')
                		->get();
                	}
                if ($results == null) {
                return view('Kindeuw.Administrator.Searchfail', compact('results', 'searchterm', 'username'));
               	}else{
                return view('Kindeuw.Administrator.Search', compact('results', 'searchterm', 'username'));
                }
        }

}