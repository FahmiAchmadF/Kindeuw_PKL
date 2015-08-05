<?php namespace Kindeuw\Http\Controllers;

use Kindeuw\Http\Requests;
use Kindeuw\Http\Controllers\Controller;
use Kindeuw\Kindeuw;
use Kindeuw\Model_User;
use Kindeuw\Bahasa;
use Kindeuw\Genre;
use Kindeuw\Kurir;
use Kindeuw\Transaksi;
use Kindeuw\Konfirmasi;
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
use Response;

class KindeuwController extends Controller {

	public function create(){
        $username = Auth::user()->username;
        $opsibahasa=Bahasa::lists('opsi_bahasa','id');
        $opsigenre=Genre::lists('opsi_genre','id');
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
		$bahasa = $request->input('Bahasa');
        $genre = $request->input('Genre');
        

        $kindeuw = Kindeuw::create($request->all());
        $kindeuw->Bahasa()->attach($bahasa);
        $kindeuw->Genre()->attach($genre);

        

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
        $Bahasa = $show->bahasa_nya();
        $Genre = $show->genre_nya();
	   
		return view('Kindeuw.Baca', compact('show', 'Bahasa', 'Genre'));
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
        //dd($req);
        
        
        

        $manekinds = Kindeuw::paginate(10);
        $username = Auth::user()->username;
        $hasil = Kindeuw::find($id);
        $jojon = Input::file('image'); 
            if ($jojon == null) {

                $hasil->update($req);
                    $hasil->Bahasa()->sync($request->input('Bahasa'));
                    $hasil->Genre()->sync($request->input('Genre'));

            }else{
                File::delete('image/' . $id . '.png');

                $gambar = Input::file('image');

                $namafile = $id . '.png';

                Image::make($gambar->getRealPath())->resize('600', '380')->save('image/'.$namafile);

                $hasil->update($req); 
                    $hasil->Bahasa()->sync($request->input('Bahasa'));
                    $hasil->Genre()->sync($request->input('Genre'));       
            }

        
            \Session::flash('ubah_data','Berhasil Mengubah Data');
        return view('Kindeuw.Administrator.Index', compact('manekinds', 'username'));

    }

    public function edit($id){
        $edit = Kindeuw::find($id);
        $username = Auth::user()->username;
        $opsibahasa=Bahasa::lists('opsi_bahasa','id');
        $opsigenre=Genre::lists('opsi_genre','id');
        $inibahasa=$edit->opsibahasa();
        $inigenre=$edit->opsigenre();

        //dd($inibahasa);
        return view('Kindeuw.Administrator.Ubah', compact('edit', 'username', 'opsibahasa', 'opsigenre', 'inibahasa', 'inigenre'));
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

    public function transaksi($id){
        $opsikurir = Kurir::lists('opsi_kurir', 'id');
        $show = Kindeuw::find($id);
        return view('Kindeuw.Transaksi', compact('opsikurir','show'));
    }

    public function posttransaksi(Requests\Transaksi $request){

        
        $jumlah = $request->input('jumlah_beli');
        $harga = $request->input('Harga');
        $total = $jumlah*$harga;
    
        $req = new Transaksi([
            'id_buku' => $request->get('id_buku'),
            'email' => $request->get('email'),
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'no_telp' => $request->get('no_telp'),
            'Judul' => $request->get('Judul'),
            'Harga' => $request->get('Harga'),
            'jumlah_beli' => $request->get('jumlah_beli'),
            'kurir' => $request->input('kurir'),
            'created_at' => Carbon::now(),
            ]);
        $req->status_transfer='0';
        $req->status_admin_terima='0';
        $req->status_terima_barang='0';
        $req->Total=$total;

        $req->save();
        $id=$request->get('id_buku');
        $stokbuku = Kindeuw::find($id);
        $stok = $stokbuku->stok;
        $hasilstok = $stok-$jumlah;
        DB::table('books')->where('id',[$id])->update(['stok' => $hasilstok]);
        $myid=$req->id;
        return view('Kindeuw.TransaksiSukses', compact('myid'));
        
    }

    public function caritransaksiku(){

        return view('Kindeuw.Caritransaksiku');
    }

    public function hasilcaritransaksi(){
        $id = Request::input('idtransaksi');
        
         if ($id == '') {
             return view('Kindeuw.Caritransaksiku');            
         }elseif ($id == ' ') {
             return view('Kindeuw.Caritransaksiku');
         }else {
             $products = DB::table('transaksi');
             $results = $products->where('id', [$id])->get();
             $resultsclear = $results[0];
                $idkurir = $resultsclear->kurir;
                $kurir = DB::select('select opsi_kurir from kurir where id = ?', [$resultsclear->kurir])[0]->opsi_kurir;
        }

        $stattrans=$resultsclear->status_transfer;
        $staadter=$resultsclear->status_admin_terima;
        $staterbar=$resultsclear->status_terima_barang;
        $status_transfer= '';
        $status_admin_terima= '';
        $status_terima_barang= '';

            if ($results == null) {
                    return view('Kindeuw.Caritransaksiku', compact('resultsclear', 'id', 'kurir'));
                }else{
                    if ($stattrans=='0') {
                        $status_transfer='BELUM MEMBAYAR';
                        }
                        elseif ($stattrans=='1'){
                            $status_transfer='SUDAH MEMBAYAR';
                        }
                    if ($staadter=='0'){
                        $status_admin_terima='BELUM DITERIMA';
                        }elseif ($staadter=='1'){
                            $status_admin_terima='SUDAH DITERIMA';
                        }
                    if ($staterbar=='0') {
                        $status_terima_barang='BARANG BELUM DITERIMA';
                        }elseif ($staterbar=='1') {
                            $status_terima_barang='BARANG SUDAH DITERIMA';
                        }
                    
                    return view('Kindeuw.Transaksiku', compact('resultsclear', 'id', 'kurir', 'status_transfer', 'status_admin_terima', 'status_terima_barang'));
                }
    }

    public function konfirmasipembayaran($id){
        return view('Kindeuw.KonfirmasiPembayaran', compact('id'));
        
        //dd($email);
    }

    public function konfirmasipost(Requests\Konfirmasi $request){
        $id = $request->get('id_transaksi');
        $email = $request->get('email');
        $cekid = DB::select('select * from transaksi where id = ?', [$id])[0];
          $emailtransaksi = $cekid->email;
          if ($emailtransaksi == $email) {
           $inputan = new Konfirmasi([
            'id_transaksi' => $request->get('id_transaksi'),
            'nama_pemilik_rekening' => $request->get('nama_pemilik_rekening'),
            'nama_bank' => $request->get('nama_bank'),
            'nomor_rekening' => $request->get('nomor_rekening'),
            'transfer_ke_no' => $request->get('transfer_ke_no'),
            'email' => $request->get('email'),
            'created_at' => Carbon::now()
            ]);
        $inputan->save();

        DB::table('transaksi')->where('id',[$id])->update(['status_transfer' => 1]);

        \Session::flash('Konfirmasi','Berhasil Mengkonfirmasi Pembayaran. Terima Kasih Dan Selamat Belanja~');
            return redirect('Kindeuw');   
          }else{
            \Session::flash('Konfirmasigagal','Konfirmasi Pembayaran Gagal, Silahkan Periksa Email Anda');
            return redirect('konfirmasi/pembayaran/', $id);
          }
        
    }

    public function konfirmasipenerimaanbarang($id){

        DB::table('transaksi')->where('id',[$id])->update(['status_terima_barang' => 1]);
        \Session::flash('Konfirmasi Terima Barang','Berhasil Mengkonfirmasi Penerimaan Barang. Terima Kasih Dan Selamat Belanja~');
        return redirect('Kindeuw');
    }

    public function listtransaksi(){
        $username = Auth::user()->username;
        $listtransaksi = Transaksi::paginate(10);
        $cobalist = DB::table('transaksi')->get();
        //dd($cobalist);
        return view('Kindeuw.Administrator.ListTransaksi', compact('listtransaksi', 'username', 'cobalist'));
    }

    public function terimatransaksi($id){
        DB::table('transaksi')->where('id',[$id])->update(['status_admin_terima' => 1]);
        return redirect('Admin/list/transaksi');
    }

}