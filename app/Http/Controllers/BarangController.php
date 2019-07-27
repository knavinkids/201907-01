<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;


class BarangController extends Controller
{
	public function index(request $request)
	{
		if($request->has('cari')){
			$data_barang = \App\barang::where('nama','LIKE', '%' .$request->cari. '%')->paginate(20)->sortable();
		}else{$data_barang = \App\barang::sortable()->paginate(20);}
		return view ('barang.index',['data_barang' => $data_barang]);
	}
	function fetch_data(Request $request){
    if($request->ajax()){
     $data_barang = DB::table('barang')->paginate(10);
      return view('barang.table', compact('data_barang'));
    }
  }
  function fetchdata(Request $request){
    if($request->ajax()){
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
      $query = $request->get('query');
      $query = str_replace(" ", "%", $query);
      $data_barang = DB::table('barang')
        ->where('nama', 'like', '%'.$query.'%')
        ->orWhere('kode', 'like', '%'.$query.'%')
        ->orWhere('merk', 'like', '%'.$query.'%')
        ->orderBy($sort_by, $sort_type)
        ->paginate(10);
        return view('barang.tableisi', ['data_barang'=> $data_barang])->render();
     }
  }
  public function cari(Request $request){
		if($request->ajax()){
			$output="";
			$barang=DB::table('barang')->where('nama','LIKE','%'.$request->cari."%")->paginate(10);
			if($barang){
				foreach ($barang as $key => $barang) {
					$output.='<tr data-id="'.$barang->kode.'" id="kdbr'.$barang->kode.'">'.
						'<td>'.$barang->kode.'</td>'.
						'<td>'.$barang->nama.'</td>'.
						'<td>'.$barang->merk.'</td>'.
						'<td>'.$barang->harga1.'</td><td></td>'.
					'</tr>';
				}
				return Response($output);
			}
		}
	}

	public function aa(request $request)
	{
		if($request->has('cari')){
			$data_barang = \App\barang::where('nama','LIKE', '%' .$request->cari. '%')->paginate(20)->sortable();
		}else{$data_barang = \App\barang::sortable()->paginate(20);}
		return view ('barang.aa',[compact('data_barang') => $data_barang]);
	}
public function ab(request $request)
	{
		if($request->has('cari')){
			$data_barang = \App\barang::where('nama','LIKE', '%' .$request->cari. '%')->sortable()->paginate(20);
		}else{$data_barang = \App\barang::sortable()->paginate(10);}
		return view ('barang.ab',['data_barang' => $data_barang]);
	}

public function simpan(Request $request){
		$kode=$request->kode;
		$jenis = ''; if(isset($request->jenis)){$jenis = $request->jenis;};
		$nama = ''; if(isset($request->nama)){$nama = $request->nama;};
		$merk = ''; if(isset($request->merk)){$merk = $request->merk;};
		$deskripsi = ''; if(isset($request->deskripsi)){$deskripsi = $request->deskripsi;};
		if ($request->hbeli == 0) {$hbeli=0;}else{$hbeli=$request->hbeli;}
		if ($request->harga1 == 0) {$harga1=0;}else{$harga1=$request->harga1;}
		if ($request->harga2 == 0) {$harga2=0;}else{$harga2=$request->harga2;}
		if ($request->harga3 == 0) {$harga3=0;}else{$harga3=$request->harga3;}
		if ($request->harga4 == 0) {$harga4=0;}else{$harga4=$request->harga4;}
		if ($request->harga5 == 0) {$harga5=0;}else{$harga5=$request->harga5;}

		
		$barang = \App\Barang::updateOrCreate(
			['kode' => $kode], ['nama' => $nama, 'jenis' => $jenis, 'hbeli' => $hbeli, 'harga1' => $harga1, 'harga2' => $harga2, 'harga3' => $harga3, 'harga4' => $harga4, 'harga5' => $harga5, 'merk' => $merk, 'deskripsi' => $deskripsi]
		);
		echo $harga1.' Barang berhasil disimpan';
		exit; 
  }

public function simpan2(Request $request){
	$kode=$request->kode;
		$jenis = ''; if(isset($request->jenis)){$jenis = $request->jenis;};
		$nama = ''; if(isset($request->nama)){$nama = $request->nama;};
		$merk = ''; if(isset($request->merk)){$merk = $request->merk;};
		$deskripsi = ''; if(isset($request->deskripsi)){$deskripsi = $request->deskripsi;};
	
		$barang = \App\Barang::updateOrCreate(
			['kode' => $kode], 
			['nama' => $nama, 'jenis' => $jenis, 'merk' => $merk, 'deskripsi' => $deskripsi
			]
		);
		echo 'Barang berhasil disimpan';
		exit;	
  }

	public function edit($kode)
	{
		$barang = \App\Barang::find($kode);
		return Response::json($barang);
	}

	public function delete($kode)
	{
		$barang = \App\barang::find($kode);
		$barang->delete($barang);
	  echo "Delete successfully";
    exit;

		}

	
}
