<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function kategori()
	{
    	// mengambil data dari table pegawai
		$kategori = DB::table('kategori')->get();
        //$pegawai =DB::table('pegawai')->paginate(15);

    	// mengirim data pegawai ke view index
		return view('kategori',['kategori' => $kategori]);
}
public function hasil($id)
	{
        $kategori = DB::table('kategori')->where('ID',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('kategoriview',['kategori' => $kategori]);
	}
    public function request(Request $request)
	{
		// update data pegawai
        $id = $request->kategori;
		// alihkan halaman ke halaman pegawai
		return redirect('/hasilcombo/'.$id);
	}
    // public function update(Request $request)
	// {
	// 	// update data pegawai
	// 	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
	// 		'pegawai_nama' => $request->nama,
	// 		'pegawai_jabatan' => $request->jabatan,
	// 		'pegawai_umur' => $request->umur,
	// 		'pegawai_alamat' => $request->alamat
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/pegawai');
	// }
}
