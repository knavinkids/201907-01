<?php
use Illuminate\Http\Request;
?>
@extends('layouts.bootstrap_master')
@section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<div class="container-fluid">	
		<div class="navbar-form navbar-left">
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
		</div>
		<form class="navbar-form navbar-right"  method="GET" action="/barang">
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
		
		 	<div class="card-body">
        <div class="dt-responsive">
          <table id="data_table" class="table">
						<thead>
		      		<tr>
								<th>KODE</th>
								<th>JENIS</th>
								<th>NAMA</th>
								<th>MERK</th>
								<th>HARGA</th>
								<th>AKSI</th>
							</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="EKODE" id="KODE"></td>
						<td><input type="text" name="EJENIS" id="JENIS"></td>
						<td><input type="text" name="ENAMA" id="NAMA"></td>
						<td><input type="text" name="EMERK" id="MERK"></td>
						<td><input type="number" name="EHARGA1" id="HARGA"></td>
						<td>
							<input type="button" value="Add" id="btnadd2">
							</a>
						</td>
					</tr>
					@foreach($data_barang as $barang)
					<tr>
						<td>{{$barang->kode}}</td>
						<td>{{$barang->jenis}}</td>
						<td>{{$barang->nama}}</td>
						<td>{{$barang->merk}}</td>
						<td class="text-right">{{number_format($barang->harga1,2)}}</td>
						<td>
							<a href="/barang/{{$barang->kode}}/edit" class="ik ik-edit"></a>
							<input type="button" class="delete ik ik-trash-2" data-id="{{$barang->kode}}">
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>KODE</th>
						<th>JENIS</th>
						<th>NAMA</th>
						<th>MERK</th>
						<th>HARGA</th>
						<th>AKSI</th>
					</tr>
					
				</tfoot>
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
	        <form>
	        	{{csrf_field()}}
					 <div class="col-sm-12 form-group">
							<div class="col-xl-8 form-group">
							  <div class="col-sm-6 form-group">
							    <label for="Ekode">Kode</label>
							    <input name="kode" type="text" class="form-control required" id="Ekode" required="true">
							  </div>

							  <div class="col-sm-6 form-group">
							    <label for="enama">jenis</label>
							    <input name="jenis" type="text" class="form-control" id="Ejenis">
							  </div>
							
							 	<div class="col-sm-6 form-group">
							    <label for="enama">Nama</label>
							    <input name="nama" type="text" class="form-control" id="Enama">
							  </div>
							  <div class="col-sm-6 form-group">
							    <label for="emerk">Merk</label>
							    <input name="merk" type="text" class="form-control" id="Emerk">
							  </div>
				  		</div>
					  	<div class="col-xl-4 form-group">
					    	<label for="edesk">Deskripsi</label>
							<textarea rows="4" name="deskripsi" class="form-control" id="edesk" placeholder="Masukkan Deskripsi Barang <br> Contoh : Warna, Spesifikasi, dll"></textarea>
					  	</div>
					  </div>
					  <div class="col-sm-12 form-group">
					    <div class="col-sm-6">
					    	<label class="col-sm-4 col-form-label" for="ehbeli">H Beli</label>
					    	<div class="col-sm-8">
					    		<input class="form-control" id="ehbeli" style="text-align: right;" type="number" name="hbeli">
					    	</div>
					    </div>
						  <div class="col-sm-6">
					    	<label class="col-sm-4 col-form-label" for="eharga1">Harga1</label>
					    	<div class="col-sm-8">
					    		<input class="form-control" id="eharga1" style="text-align: right;" type="number" name="harga1">
					    	</div>
					    </div>
					    <div class="col-sm-6">
					    	<label class="col-sm-4 col-form-label" for="eharga2">Harga2</label>
					    	<div class="col-sm-8">
					    		<input class="form-control" id="eharga2" style="text-align: right;" type="number" name="harga2">
					    	</div>
					    </div>
					    <div class="col-sm-6">
					    	<label class="col-sm-4 col-form-label" for="eharga3">Harga3</label>
					    	<div class="col-sm-8">
					    		<input class="form-control" id="eharga3" style="text-align: right;" type="number" name="harga3">
					    	</div>
					    </div>
					    <div class="col-sm-6">
					    	<label class="col-sm-4 col-form-label" for="eharga4">Harga4</label>
					    	<div class="col-sm-8">
					    		<input class="form-control" id="eharga4" style="text-align: right;" type="number" name="harga4">
					    	</div>
					    </div>
					    <div class="col-sm-6">
					    	<label class="col-sm-4 col-form-label" for="eharga5">Harga5</label>
					    	<div class="col-sm-8">
					    		<input class="form-control" id="eharga5" style="text-align: right;" type="number" name="harga5">
					    	</div>
					    </div>
					  </div>

					  <div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="button" id="btnadd" class="btn btn-primary">Save changes</button>
	      	  </div>
	     		</form>
	     	</div>
	      
	    </div>
	  </div>
	 </div>
<!-- Script -->
<script type='text/javascript'>
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function(){

  // Fetch records
 // fetchRecords();

  // Add record
  $('#btnadd2').click(function(){
  	$('#HARGA1').val('');
          
    var kode = $('#KODE').val();
    var jenis = $('#jenis').val();
    var nama = $('#NAMA').val();
    var merk = $('#merk').val();
    var merk = $('#deskripsi').val();
    var hbeli = $('#hbeli').val();
    var harga1 = $('#harga1').val();
    var harga2 = $('#harga2').val();
    var harga3 = $('#harga3').val();
    var harga4 = $('#harga4').val();
    var harga5 = $('#harga5').val();
    if(kode != '' && nama != ''){
      $.ajax({
        url: 'barang/baru',
        type: 'post',
        data: {_token: CSRF_TOKEN,kode: kode, jenis: jenis, nama: nama,merk: merk, hbeli: hbeli, harga1: harga1, harga2: harga2, harga3: harga3, harga4: harga4, harga5: harga5},
        success: function(response){

          if(response > 0){
            var id = response;
            var findnorecord = $('#data_table tr.norecord').length;

            if(findnorecord > 0){
              $('#data_table tr.norecord').remove();
            }
            var tr_str = "<tr>"+
            "<td>" + kode + "</td>" +
            "<td>" + jenis + "</td>" +
            "<td>" + nama + "</td>" +
            "<td>" + merk + "</td>" +
            "<td class='text-right'>" + harga1 + "}}</td>" +
						"<td>" +
							"<a href='/barang/" + kode + "/edit' class='ik ik-edit'></a>" +
							"<a href='/barang/" + kode + "/delete' class='ik ik-trash-2' onclick='return confirm('Yakin mau dihapus?')'></a>" +
						"</td>" +
            "</tr>";

            $("#data_table tbody").append(tr_str);
          }else if(response == 0){
            alert('Username already in use.');
          }else{
            alert(response);
          }

          // Empty the input fields
          $('#KODE').val('');
          $('#NAMA').val('');
          $('#HARGA1').val('');
        }
      });
    }else{
      alert('Fill all fields');
    }
  });

});

// Update record
$(document).on("click", ".update" , function() {
  var edit_id = $(this).data('id');

  var name = $('#name_'+edit_id).val();
  var email = $('#email_'+edit_id).val();

  if(name != '' && email != ''){
    $.ajax({
      url: 'updateUser',
      type: 'post',
      data: {_token: CSRF_TOKEN,editid: edit_id,name: name,email: email},
      success: function(response){
        alert(response);
      }
    });
  }else{
    alert('Fill all fields');
  }
});

// Delete record
$(document).on("click", ".delete" , function() {
  var delete_id = $(this).data('kode');
  var el = this;
  $.ajax({
    url: 'barang/delete/'+delete_id,
    type: 'get',
    success: function(response){
      $(el).closest( "tr" ).remove();
      alert(response);
    }
  });
});

// Fetch records
function fetchRecords(){
  $.ajax({
    url: 'getUsers',
    type: 'get',
    dataType: 'json',
    success: function(response){

      var len = 0;
      $('#data_table tbody tr:not(:first)').empty(); // Empty <tbody>
      if(response['data'] != null){
        len = response['data'].length;
      }

      if(len > 0){
        for(var i=0; i<len; i++){

          var id = response['data'][i].id;
          var username = response['data'][i].username;
          var name = response['data'][i].name;
          var email = response['data'][i].email;

          var tr_str = "<tr>" +
          "<td align='center'><input type='text' value='" + username + "' id='username_"+id+"' disabled></td>" +
          "<td align='center'><input type='text' value='" + name + "' id='name_"+id+"'></td>" + 
          "<td align='center'><input type='email' value='" + email + "' id='email_"+id+"'></td>" +
          "<td align='center'><input type='button' value='Update' class='update' data-id='"+id+"' ><input type='button' value='Delete' class='delete' data-id='"+id+"' ></td>"+
          "</tr>";

          $("#data_table tbody").append(tr_str);

        }
      }else{
        var tr_str = "<tr class='norecord'>" +
        "<td align='center' colspan='4'>No record found.</td>" +
        "</tr>";

        $("#data_table tbody").append(tr_str);
      }

    }
  });
}
</script>

	
@endsection