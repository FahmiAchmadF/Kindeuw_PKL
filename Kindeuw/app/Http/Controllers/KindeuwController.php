<?php namespace Kindeuw\Http\Controllers;

use Kindeuw\Http\Requests;
use Kindeuw\Http\Controllers\Controller;
use Kindeuw\Kindeuw;
use Kindeuw\Model_User;
use Kindeuw\Bahasa;
use Kindeuw\Genre;
use DB;
use Carbon\Carbon;
use Input;
use Illuminate\Support\Facades\File;
use Image;
use Request;
use dompdf;
use PDF;
use Excel;
use Hash;
use Auth;

class KindeuwController extends Controller {

	public function create(){
        $username = Auth::user()->username;
        $opsibahasa=Bahasa::lists('opsi_bahasa','id');
        $opsigenre=Genre::lists('opsi_genre','id');
        //dd($opsigenre, $opsibahasa);
		return view('Kindeuw.Administrator.Create', compact('username', 'opsibahasa', 'opsigenre'));
	}

    public function login(){
        return view('Kindeuw.Login');
    }

    public function daftar(){
        return view('kindeuw.DaftarAkun');
    }

    public function regis(Requests\user $request){
        $req = new Model_User([
            'nama' => $request->get('nama'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' =>Hash::make($request->get('password')),
            'created_at' => Carbon::now(),
            ]);
        
        $req->save();
            \Session::flash('buat_akun','Berhasil Membuat Akun, Silahkan Login');
        return redirect('Admin/index');
    }

	public function index(){


        $manekinds = Kindeuw::paginate(10);

		return view('Kindeuw.Index', compact('manekinds'));

	}

	public function store(Requests\KindeuwRequest $request){
		$bahasa = $request->get('Bahasa');
        $genre = $request->get('Genre');
        $hasilgenre = DB::select('select opsi_genre from genre where id= ?', [$genre]);
        $hasilgenre1 = $hasilgenre[0]->opsi_genre;
        $hasilbahasa = DB::select('select opsi_bahasa from bahasa where id= ?', [$bahasa]);
        $hasilbahasa1 = $hasilbahasa[0]->opsi_bahasa;

        $kindeuw = new Kindeuw([
            'id' => $request->get('id'),
            'stok' => $request->get('stok'),
            'Judul' => $request->get('Judul'),
            'Penulis' => $request->get('Penulis'),
            'Penerbit'  => $request->get('Penerbit'),
            'Deskripsi' => $request->get('Deskripsi'),
            'Banyak_halaman' => $request->get('Banyak_halaman'),
            'Bahasa' => $hasilbahasa1,
            'Genre' => $hasilgenre1,
            'Harga' => $request->get('Harga'),
            'created_at' => Carbon::now(),
            ]);
        

        $kindeuw->save();


        $file = Input::file('image');
        $username = Auth::user()->username;
        $manekinds = Kindeuw::paginate(10);
            if ($file == null) {
                \Session::flash('flash_message','Berhasil Menambah Data Buku');
            return view('Kindeuw.Administrator.Index', compact('username', 'manekinds'));
        }else{
        $filename = $kindeuw->id . '.png';

        Image::make($file->getRealPath())->resize('600', '380')->save('image/'.$filename);
            \Session::flash('flash_message','Berhasil Menambah Data Buku');
        return view('Kindeuw.Administrator.Index', compact('username', 'manekinds'));
        }
	}

	public function baca($id){
		$show = Kindeuw::find($id);
	   
		return view('Kindeuw.Baca', compact('show'));
	}

	public function hapus($id){
		Kindeuw::find($id)->delete();
        $manekinds = Kindeuw::paginate(10);
        File::delete('image/' . $id .'.png');
        $username = Auth::user()->username;
        \Session::flash('hapus_data','Berhasil Menghapus Data');
        return view('Kindeuw.Administrator.Index', compact('username', 'manekinds'));
	}

    public  function ubah($id, Requests\KindeuwRequest $request){
        

        $req = $request->all();
        $manekinds = Kindeuw::paginate(10);
        $username = Auth::user()->username;
        $hasil = Kindeuw::find($id);
        $jojon = Input::file('image'); 
            if ($jojon == null) {

                $hasil->update($req);

            }else{
                File::delete('image/' . $id . '.png');

                $gambar = Input::file('image');

                $namafile = $id . '.png';

                Image::make($gambar->getRealPath())->resize('600', '380')->save('image/'.$namafile);

                $hasil->update($req);        
            }

        
            \Session::flash('ubah_data','Berhasil Mengubah Data');
        return view('Kindeuw.Administrator.Index', compact('manekinds', 'username'));

    }

    public function edit($id){
        $edit = Kindeuw::find($id);
        $username = Auth::user()->username;
        return view('Kindeuw.Administrator.Ubah', compact('edit', 'username'));
    }

    public function about(){
        return view('Kindeuw.About');
    }

    public function kontak(){
        return view('Kindeuw.Contact');
    }

    public function cari(){
        $searchterm = Request::input('cari1');
        if ($searchterm == '') {
            return view('Kindeuw.Searchfail', compact('results', 'searchterm'));            
        }elseif ($searchterm == ' ') {
            return view('Kindeuw.Searchfail', compact('results', 'searchterm'));
        }else {
            $products = DB::table('books');
            $results = $products->where('id', 'LIKE', '%'. $searchterm .'%')
                ->orWhere('Judul', 'LIKE', '%'. $searchterm .'%')
                ->get();
        }   
            if ($results == null) {
                    return view('Kindeuw.Searchfail', compact('results', 'searchterm'));
                }else{
                    return view('Kindeuw.Search', compact('results', 'searchterm'));
                }
            }

    public function pdf($id){
        $read = Kindeuw::find($id);
        $pdf = PDF::loadView('Kindeuw.PDF', $read);
        return $pdf->stream();
    }

    public function excel(){
        $data = Kindeuw::all();

    Excel::create('iniexcel', function($excel) use($data) {

    $excel->sheet('coba1', function($sheet) use($data) {

        $sheet->fromArray($data);

    });

})->export('xls');
    }
}
