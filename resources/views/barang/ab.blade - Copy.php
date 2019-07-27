@extends('layouts.bootstrap_master')
@section('content')
<?php use Illuminate\Http\Request;?>

	<meta name="csrf-token" content="{{ csrf_token() }}" />


	<div class="row">
		<div class="card-body">
	 		<div class="row invoice-info">
		    <div class="col-sm-6 invoice-col">
					<button type="button" class="tambah btn btn-primary">Tambah Data</button>
		 			<button type="button" class="represh btn btn-primary">refresh</button>
		 		</div>
		    <div class="col-sm-6 invoice-col">
					<form method="GET" action="">
						<div class="input-group">
							<input name="cari" type="text" class="form-control" value="{{request()->get('cari')}}" placeholder="Search dashboard...">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary">Cari</button>
							</span>
						</div>
					</form>
		 		</div>
		 		<div class="row">
		 			<div class="col-12 invoice-col">
		 				<div id = "alert_placeholder"></div>
		    	</div>
		    </div>
		 	</div>
	 		<div class="row">
	 			<div class="col-12 table-responsive">
	    	 	@include('barang.table')
		    </div>
		  </div>
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade full-window-modal" id="dialogbaru" tabindex="-1" role="dialog" aria-labelledby="dialogbaruLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="dialogbaruLabel">Data Barang</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="divtable modal-body" id ='datacontainer'>
	      	@include('barang.editform')
	      </div>
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	        	<button type="button" id="btnsimpan" value="Simpan" class="btn btn-primary">Simpan</button>
		     	</div>
		      
	      </div>	      
	    </div>
	  </div>
	</div>

<script type="text/javascript">

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function(){
	$('#btnsimpan').click(function(){
  	var status = 'Prepare';
  	var tipesimpan = $('#btnsimpan').val();
  	$('#btnsimpan').html('Menyimpan...');
  	var kode = $('#kode').val();
    var jenis = $('#jenis').val();
    var nama = $('#nama').val();
    var merk = $('#merk').val();
    var deskripsi = $('#deskripsi').val();
    var hbeli = $('#hbeli').val();
    var harga1 = $('#harga1').val();
    var harga2 = $('#harga2').val();
    var harga3 = $('#harga3').val();
    var harga4 = $('#harga4').val();
    var harga5 = $('#harga5').val();

    if(kode != '' && nama != ''){
      $.ajax({
        url: 'barang/simpan',
        type: 'post',
        data: {_token: CSRF_TOKEN,kode: kode, jenis: jenis, nama: nama,merk: merk, deskripsi: deskripsi, hbeli: hbeli, harga1: harga1, harga2: harga2, harga3: harga3, harga4: harga4, harga5: harga5},
        success: function(response){
        	alert('test');
        	var findnorecord = $('#data_tableku tr.norecord').length;
        	status = status + ' ' + response;
          if(findnorecord > 0){
            $('#data_tableku tr.norecord').remove();
          }
          var tr_str = "<tr id='kdbr" + kode + "'>"+
          "<td>" + kode + "</td>" +
          "<td>" + nama + "</td>" +
          "<td>" + merk + "</td>" +
          "<td class='text-right'> " + number_format(harga1,0) + "</td>" +
					"<td>" +
						"<a class='editx ik ik-edit' data-id='" + kode + "'></a>" +
						"<a class='deletex ik ik-trash-2' data-id='" + kode + "'></a>" +
					"</td>" +
          "</tr>";
          if(tipesimpan == 'Update'){
          	$("#kdbr" + kode).replaceWith(tr_str);
          }else{
          	$("#data_tableku tbody").prepend(tr_str);
          }

          
       	$('#dialogbaru').modal('hide');
        showalert(response,'alert-success');
        }
      });
    }else{
      alert('Fill all fields');
    }
  });


});

$(document).on("click", ".tambah" , function() {
  $('#btnsimpan').val('Simpan');
  $('#btnsimpan').html('Simpan');
  $('#dialogbaruLabel').html("Input Data Barang Baru");
  $('#nama').val('');
  $('#kode').val(''); $('#kode').disabled = false;
  $('#merk').val('');
  $('#hbeli').val('');
  $('#deskripsi').val('');
  $('#harga1').val('');
  $('#harga2').val('');
  $('#harga3').val('');
  $('#harga4').val('');
  $('#harga5').val('');
  $('#dialogbaru').modal('show');
  $('#kode').focus;

});


$('.editx').click(function(){
    var aid = $(this).data('id');
   $.get('/barang/' + aid + '/edit', function (data) {
   		$('#kode').disabled = true;
   		$('#btnsimpan').val('Update');
      $('#btnsimpan').html('Update');
      $('#dialogbaruLabel').html("Edit Data Barang");
      $('#kode').val(aid);
      $('#nama').val(data.nama);
      $('#kode').val(aid);
      $('#jenis').val(data.jenis);
      $('#merk').val(data.merk);
      $('#deskripsi').val(data.deskripsi);
     	$('#hbeli').val(data.hbeli);
      $('#harga1').val(data.harga1);
      $('#harga2').val(data.harga2);
      $('#harga3').val(data.harga3);
      $('#harga4').val(data.harga4);
      $('#harga5').val(data.harga5);
      
      $('#dialogbaru').modal('show');
    })

});

$(document).on("click", ".deletex" , function() {
	if(confirm('Yakin mau dihapus?')){
	  var delete_id = $(this).data('id');
	  var el = this;
	  $.ajax({
	    url: 'barang/'+delete_id+'/delete',
	    type: 'get',
	    success: function(response){
	      $(el).closest( "tr" ).remove();
	      showalert(response,'alert-success');
	    }
	  });
	}
});

$('.represh').click(function (event) {
    $('#datacontainer').load(document.URL +  ' #datacontainer');
});

</script>


@endsection/