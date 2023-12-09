<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function nilai()
	{
    	// mengambil data dari table pegawai
		$nilaikuliah = DB::table('nilaikuliah')->get();
        //$pegawai =DB::table('pegawai')->paginate(15);

    	// mengirim data pegawai ke view index
		return view('nilai',['nilaikuliah' => $nilaikuliah]);
}
public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilaikuliah');

	}
public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}
}
