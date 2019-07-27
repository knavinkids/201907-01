@extends('layouts.bootstrap_master')
@section('content')
@if(session('sukses'))
	<div class="alert alert-success" role="alert">
			{{session('sukses')}}
	</div>
@endif
		<div class="row">
		  <form action="/barang/{{$barang->kode}}/update" method="POST">
	    	  	{{csrf_field()}}	
				<div class="form-group col-sm-12">
					<div class="col-sm-8">
					  <div class="col-sm-6 form-group">
					    <label for="enama">Kode</label>
					    <input name="kode" type="text" class="form-control" id="Enama" value="{{$barang->kode}}" disabled="true">
					  </div>

					  <div class="col-sm-6 form-group">
					    <label for="enama">jenis</label>
					    <input name="jenis" type="text" class="form-control" id="Ejenis" value="{{$barang->jenis}}">
					  </div>
					
					 	<div class="col-sm-6 form-group">
					    <label for="enama">Nama</label>
					    <input name="nama" type="text" class="form-control" id="Enama" value="{{$barang->nama}}">
					  </div>
					  <div class="col-sm-6 form-group">
					    <label for="emerk">Merk</label>
					    <input name="merk" type="text" class="form-control" id="Emerk" value="{{$barang->merk}}">
					  </div>
		  		</div>
			  	<div class="col-sm-4 form-group">
			    	<label for="edesk">Deskripsi</label>
					<textarea rows="4" name="deskripsi" class="form-control" id="edesk" placeholder="Masukkan Deskripsi Barang 
	Contoh : Warna, Spesifikasi, dll">{{$barang->deskripsi}}</textarea>
			  	</div>
			  </div>
				<div class="form-group col-sm-12">
			    <div class="col-sm-6">
			    	<label class="col-sm-4 col-form-label" for="ehbeli">Harga Beli</label>
			    	<div class="col-sm-8">
			    		<input class="form-control" id="ehbeli" style="text-align: right;" type="number" name="hbeli" value="{{$barang->hbeli}}">
			    	</div>
			    </div>
				  <div class="col-sm-6">
			    	<label class="col-sm-4 col-form-label" for="eharga1">Harga1</label>
			    	<div class="col-sm-8">
			    		<input class="form-control" id="eharga1" style="text-align: right;" type="number" name="harga1" value="{{$barang->harga1}}">
			    	</div>
			    </div>
			    <div class="col-sm-6">
			    	<label class="col-sm-4 col-form-label" for="eharga2">Harga2</label>
			    	<div class="col-sm-8">
			    		<input class="form-control" id="eharga2" style="text-align: right;" type="number" name="harga2" value="{{$barang->harga2}}">
			    	</div>
			    </div>
			    <div class="col-sm-6">
			    	<label class="col-sm-4 col-form-label" for="eharga3">Harga3</label>
			    	<div class="col-sm-8">
			    		<input class="form-control" id="eharga3" style="text-align: right;" type="number" name="harga3" value="{{$barang->harga3}}">
			    	</div>
			    </div>
			    <div class="col-sm-6">
			    	<label class="col-sm-4 col-form-label" for="eharga4">Harga4</label>
			    	<div class="col-sm-8">
			    		<input class="form-control" id="eharga4" style="text-align: right;" type="number" name="harga4" value="{{$barang->harga4}}">
			    	</div>
			    </div>
			    <div class="col-sm-6">
			    	<label class="col-sm-4 col-form-label" for="eharga5">Harga5</label>
			    	<div class="col-sm-8">
			    		<input class="form-control" id="eharga5" style="text-align: right;" type="number" name="harga5" value="{{$barang->harga5}}">
			    	</div>
			    </div>
			  </div>
		  	<div class="form-group col-sm-12">
			  	<button type="submit" class="btn btn-warning">Update Data</button>
     	  </div>
	    </form>
		</div>
	@endsection