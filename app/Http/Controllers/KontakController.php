<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kontakController extends Controller
{
	public function index1(request $request)
	{
		if($request->has('cari')){
			$data_kontak = \App\kontak::where('nama','LIKE', '%' .$request->cari. '%')->paginate(10);
		}else{$data_kontak = DB::table('kontak')->paginate(10);}
		return view ('kontak.index',['data_kontak' => $data_kontak, 'tipe' => '', 'xtipe' =>'/all']);
	}

	public function index2(request $request, $tipex)
	{
		if($request->has('cari')){$data_kontak = \App\kontak::where('nama','LIKE', '%' .$request->cari. '%');}
		else{$data_kontak = DB::table('kontak');}
		$tipexx = '/all';
		if (strtoupper($tipex)=='CUSTOMER' or  strtoupper($tipex)=='PEGAWAI' or  strtoupper($tipex)=='SUPPLIER'){
			$data_kontak = $data_kontak->where('tipe', 'LIKE', '%' .$tipex. '%');
			$tipexx = '/' . strtolower($tipex); 
		}
		$data_kontak = $data_kontak->paginate(20);

		return view ('kontak.index',['data_kontak' => $data_kontak, 'tipe' => $tipex, 'xtipe' => $tipexx]);
	}

	public function baru(Request $request)
	{
		\App\kontak::create($request->all());
		return redirect('/kontak')->with('sukses','data berhasil disimpan');
		// return $request->all();
	}
	public function edit($kode, $tipex)
	{
		$kontak = \App\kontak::find($kode);
		$tipexx = '/all';
		if (strtoupper($tipex)=='CUSTOMER' or  strtoupper($tipex)=='PEGAWAI' or  strtoupper($tipex)=='SUPPLIER'){
			$tipexx = '/' . strtolower($tipex); 
		}
		return view ('kontak/edit',['kontak' => $kontak, 'tipe' => $tipex, 'xtipe' => $tipexx]);
	}
	public function edit2($kode)
	{
		$kontak = \App\kontak::find($kode);
		return view ('kontak/edit',['kontak' => $kontak]);
	}

	public function update(Request $request, $kode, $tipex)
	{
		$kontak = \App\kontak::find($kode);
		$kontak->update ($request->all());
		$tipexx = '/all';
		if (strtoupper($tipex)=='CUSTOMER' or  strtoupper($tipex)=='PEGAWAI' or  strtoupper($tipex)=='SUPPLIER'){
			$tipexx = '/' . strtolower($tipex); 
		}
		return redirect('/kontak' . $tipexx)->with('sukses','data berhasil diupdate');
	}
	public function delete($kode, $tipex)
	{
		$tipexx = '/all';
		if (strtoupper($tipex)=='CUSTOMER' or  strtoupper($tipex)=='PEGAWAI' or  strtoupper($tipex)=='SUPPLIER'){
			$tipexx = '/' . strtolower($tipex); 
		}
		$kontak = \App\kontak::find($kode);
		$kontak->delete($kontak);
		return redirect('/kontak/' . $tipexx)->with('sukses','data berhasil dihapus');
	}

		public function login2(request $request)
	{
	
		return view ('kontak/login');
	}

}
