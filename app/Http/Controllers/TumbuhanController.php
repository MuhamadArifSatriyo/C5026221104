<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TumbuhanController extends Controller
{
	public function index()
	{
        $tumbuhan =DB::table('tumbuhan')->paginate(15);

    	// mengirim data tumbuhan ke view index
		return view('tumbuhan',['tumbuhan' => $tumbuhan]);

	}

	// method untuk menampilkan view form tambah tumbuhan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahtumbuhan');

	}

	// method untuk insert data ke table tumbuhan
	public function store(Request $request)
	{
		// insert data ke table tumbuhan
		DB::table('tumbuhan')->insert([
			// 'kodetumbuhan' => $request->kode,
			'namatumbuhan' => $request->nama,
			'jumlahtumbuhan' => $request->jumlah,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman tumbuhan
		return redirect('/tumbuhan');

	}

	// method untuk edit data tumbuhan
	public function edit($id)
	{
		// mengambil data tumbuhan berdasarkan id yang dipilih
		$tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$id)->get();
		// passing data tumbuhan yang didapat ke view edit.blade.php
		return view('edittumbuhan',['tumbuhan' => $tumbuhan]);

	}
    // method untuk view data 1 record
    // public function view($id)
	// {
	// 	// mengambil data pegawai berdasarkan id yang dipilih
	// 	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// 	// passing data pegawai yang didapat ke view edit.blade.php
	// 	return view('view',['pegawai' => $pegawai]);

	// }

	// update data tumbuhan
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('tumbuhan')->where('kodetumbuhan',$request->kode)->update([
			'kodetumbuhan' => $request->kode,
			'namatumbuhan' => $request->nama,
			'jumlahtumbuhan' => $request->jumlah,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tumbuhan');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('tumbuhan')->where('kodetumbuhan',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/tumbuhan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
        ->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai, 'cari'=> $cari]);

	}
}
