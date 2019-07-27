@extends('layouts.bootstrap_master')
@section('content')
<?php
use Illuminate\Http\Request;?>
	<div class="container-fluid">	
		<div class="navbar-form navbar-left">
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
		</div>
		<form class="navbar-form navbar-right"  method="GET" action="/kontak{{$xtipe}}">
			<div class="input-group">
				<input name="cari" type="text" class="form-control" value="{{request()->get('cari')}}" placeholder="Search dashboard...">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-primary">Cari</button>
				</span>
			</div>
		</form>
	</div>
	@if(session('sukses'))
		<div class="alert alert-success" role="alert">
				{{session('sukses')}}
		</div>
	@endif
<table id="demo_table" class="table table-bordered table-striped">
 	<thead>
 		<tr>
			<th>KODE</th>
			<th>TIPE</th>
			<th>NAMA</th>
			<th>KOTA</th>
			<th>TELP</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody id="myTable">
		@foreach($data_kontak as $dt)
		<tr>
			<td>{{$dt->kode}}</td>
			<td>{{$dt->tipe}}</td>
			<td>{{$dt->nama}}</td>
			<td>{{$dt->kota}}</td>
			<td>{{$dt->telp}}</td>
			<td>
				<a href="/kontak/{{$dt->kode}}{{$xtipe}}/edit" class="lnr lnr-pencil"></a>
				<a href="/kontak/{{$dt->kode}}{{$xtipe}}/delete" class="lnr lnr-trash" onclick="return confirm('Yakin mau dihapus?')"></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
			{{ $data_kontak->appends(request()->only('cari'))->links() }}
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/kontak{{$xtipe}}/baru" method="POST">
	        	{{csrf_field()}}
					 <div class="col-sm-12 form-group">
							<div class="col-xl-8 form-group">
							  <div class="col-sm-6 form-group">
							    <label for="Ekode">KODE</label>
							    <input name="kode" type="text" class="form-control required" id="Ekode" required="true">
							  </div>

							  <div class="col-sm-6 form-group">
							    <label for="etipe">TIPE</label>
							    <input name="tipe" type="text" class="form-control" id="etipe" value="{{strtoupper($tipe)}}">
							  </div>
							
							 	<div class="col-sm-6 form-group">
							    <label for="enama">NAMA</label>
							    <input name="nama" type="text" class="form-control" id="Enama">
							  </div>
							  <div class="col-sm-6 form-group">
							    <label for="ekota">KOTA</label>
							    <input name="kota" type="text" class="form-control" id="ekota">
							  </div>
							  <div class="col-sm-6 form-group">
							    <label for="etelp">TELP</label>
							    <input name="telp" type="text" class="form-control" id="etelp">
							  </div>
				  		</div>
					  	<div class="col-xl-4 form-group">
					    	<label for="edesk">Deskripsi</label>
							<textarea rows="4" name="deskripsi" class="form-control" id="edesk" placeholder="Masukkan Deskripsi Kontak 
Contoh : No. Rekening, Keterangan Penagihan, dll"></textarea>
					  	</div>
					  </div>
					  
					  <div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="submit" class="btn btn-primary">Save changes</button>
	      	  </div>
	     		</form>
	     	</div>
	      
	    </div>
	  </div>
	 </div>
@endsectio