<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function index(request $request)
	{
		if($request->has('cari')){
			$data_siswa = \App\Siswa::where('nama','LIKE', '%' .$request->cari. '%')->get();
		}else{$data_siswa = \App\Siswa::all();}
		return view ('siswa.index',['data_siswa' => $data_siswa]);
	}

	public function create(Request $request)
	{
		\App\Siswa::create($request->all());
		return redirect('/siswa')->with('sukses','data berhasil disimpan');
		// return $request->all();
	}
	public function edit($id)
	{
		$siswa = \App\Siswa::find($id);
		return view ('siswa/edit',['siswa' => $siswa]);
	}

	public function update(Request $request, $id)
	{
		$siswa = \App\Siswa::find($id);
		$siswa->update ($request->all());
		return redirect('/siswa')->with('sukses','data berhasil diupdate');
	}
	public function delete($id)
	{
		$siswa = \App\Siswa::find($id);
		$siswa->delete($siswa);
		return redirect('/siswa')->with('sukses','data berhasil dihapus');
	}

		public function login2(request $request)
	{
	
		return view ('siswa/login');
	}

}
