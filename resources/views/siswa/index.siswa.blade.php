@extends('layouts.master')
@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1> Data Siswa <h1/>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
				  Tambah Data
				</button>
			</div>
			<table class="table table-hover">
				<tr>
					<th>Nama</th>
					<th>Kelamin</th>
					<th>Agama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
				@foreach($data_siswa as $siswa)
				<tr>
					<td>{{$siswa->nama}}</td>
					<td>{{$siswa->kelamin}}</td>
					<td>{{$siswa->agama}}</td>
					<td>{{$siswa->alamat}}</td>
					<td>
						<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
					</td>
				</tr>
				@endforeach
			</table>
			
		</div>
	</div>
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
	        <form action="/siswa/create" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
			    <small id="emailHelp" class="form-text text-muted">Nama harus sesuai dengan Ijazah.</small>
			  </div>
			  <div class="form-group">
			    <label for="SelectKelamin">Jenis Kelamin</label>
			    <select name="kelamin" class="form-control" id="SelectKelamin">
			      <option>Laki-laki</option>
			      <option>Perempuan</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="SelectAgama">Agama</label>
			    <select name="agama" class="form-control" id="SelectAgama">
			      <option>Islam</option>
			      <option>Kristen</option>
			      <option>Katolik</option>
			      <option>Hindu</option>
			      <option>Budha</option>
			      <option>Konghucu</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="textareaalamat">Alamat</label>
				<textarea name="alamat" class="form-control" id="textareaalamat" placeholder="Masukkan Alamat"></textarea>
			  </div>
			  <div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Save changes</button>
	      	  </div>
	     	</form>
	     </div>
	      
	    </div>
	  </div>
@endsection