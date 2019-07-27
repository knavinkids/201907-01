@extends('layouts.master_retail')
@section('content')
@if(session('sukses'))
	<div class="alert alert-success" role="alert">
			{{session('sukses')}}
	</div>
@endif
		<div class="row">
		  <form action="/kontak/{{$kontak->kode}}{{$xtipe}}/update" method="POST">
	    	  	{{csrf_field()}}	
				<div class="form-group col-sm-12">
					<div class="col-sm-8">
					  <div class="col-sm-6 form-group">
					    <label for="enama">KODE</label>
					    <input name="kode" type="text" class="form-control" id="Enama" value="{{$kontak->kode}}" disabled="true">
					  </div>

					  <div class="col-sm-6 form-group">
					    <label for="etipe">TIPE</label>
					    <input name="tipe" type="text" class="form-control" id="etipe" value="{{$kontak->tipe}}">
					  </div>
					
					 	<div class="col-sm-6 form-group">
					    <label for="enama">NAMA</label>
					    <input name="nama" type="text" class="form-control" id="Enama" value="{{$kontak->nama}}">
					  </div>
					  <div class="col-sm-6 form-group">
					    <label for="ekota">KOTA</label>
					    <input name="kota" type="text" class="form-control" id="ekota" value="{{$kontak->kota}}">
					  </div>
					  <div class="col-sm-6 form-group">
					    <label for="etelp">TELP</label>
					    <input name="telp" type="text" class="form-control" id="etelp" value="{{$kontak->telp}}">
					  </div>
		  		</div>
			  	<div class="col-sm-4 form-group">
			    	<label for="edesk">Deskripsi</label>
					<textarea rows="4" name="deskripsi" class="form-control" id="edesk" placeholder="Masukkan Deskripsi kontak 
	Contoh : Warna, Spesifikasi, dll">{{$kontak->deskripsi}}</textarea>
			  	</div>
			  </div>
				<div class="form-group col-sm-12">
			  	<button type="submit" class="btn btn-warning">Update Data</button>
     	  </div>
	    </form>
		</div>
	@endsection