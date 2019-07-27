@extends('layouts.master')
@section('content')
@if(session('sukses'))
	<div class="alert alert-success" role="alert">
			{{session('sukses')}}
	</div>
@endif
		<div class="row">
		  <div class="col-lg-12">
			<form action="/siswa/{{$siswa->id}}/update" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$siswa->nama}}">
			    <small id="emailHelp" class="form-text text-muted">Nama harus sesuai dengan Ijazah.</small>
			  </div>
			  <div class="form-group">
			    <label for="SelectKelamin">Jenis Kelamin</label>
			    <select name="kelamin" class="form-control" id="SelectKelamin">
			      <option @if($siswa->kelamin == 'Laki-laki') selected @endif >Laki-laki</option>
			      <option @if($siswa->kelamin == 'Perempuan') selected @endif >Perempuan</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="SelectAgama">Agama</label>
			    <select name="agama" class="form-control" id="SelectAgama">
			      <option @if($siswa->agama == 'Islam') selected @endif >Islam</option>
			      <option @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
			      <option @if($siswa->agama == 'Katolik') selected @endif>Katolik</option>
			      <option @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
			      <option @if($siswa->agama == 'Budha') selected @endif>Budha</option>
			      <option @if($siswa->agama == 'Konghucu') selected @endif>Konghucu</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="textareaalamat">Alamat</label>
				<textarea name="alamat" class="form-control" id="textareaalamat" placeholder="Masukkan Alamat">{{$siswa->alamat}}</textarea>
			  </div>
			  <button type="submit" class="btn btn-warning">Update Data</button>
	     	</form>
	     </div>
		</div>
	@endsection