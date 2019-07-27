@extends('layouts.bootstrap_master')
@section('content')
<?php use Illuminate\Http\Request;?>
<!DOCTYPE html>
<html>
  <head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css">
				<link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
				<link rel="stylesheet" href="/assets/plugins/icon-kit/dist/css/iconkit.min.css">
				<link rel="stylesheet" href="/assets/plugins/ionicons/dist/css/ionicons.min.css">
				<link rel="stylesheet" href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
				<link rel="stylesheet" href="/assets/plugins/summernote/dist/summernote-bs4.css">
        
				<!-- <link rel="stylesheet" href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css"> -->
				<link rel="stylesheet" href="/assets/plugins/jvectormap/jquery-jvectormap.css">
				<link rel="stylesheet" href="/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
				<link rel="stylesheet" href="/assets/plugins/weather-icons/css/weather-icons.min.css">
				<link rel="stylesheet" href="/assets/plugins/c3/c3.min.css">
				<link rel="stylesheet" href="/assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
				<link rel="stylesheet" href="/assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
				<link rel="stylesheet" href="/assets/dist/css/theme.min.css">
				
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
</head>
<body>
		<div class="row">
			<div class="navbar-form navbar-left">
				<button type="button" class="tambah btn btn-primary">Tambah Data</button>

			</div>
			<form class="navbar-form navbar-right"  method="GET" action="/aa">
				<div class="input-group">
					<input name="cari" type="text" class="form-control" value="{{request()->get('cari')}}" placeholder="Search dashboard...">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary">Cari</button>
					</span>
				</div>
			</form>
		</div>
		<div class="row">
  		<div id = "alert_placeholder"></div>
		 	<div class="card-body">
		    <div class="dt-responsive">
		      <table id="data_table" class="table">
						<thead>
		      		<tr>
								<th>@sortablelink('kode','KODE')</th>
								<th>@sortablelink('nama','NAMA')</th>
								<th>@sortablelink('merk','MERK')</th>
								<th>@sortablelink('harga1','HARGA')</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_barang as $barang)
								<tr id="kdbr{{$barang->kode}}">
									<td>{{$barang->kode}}</td>
									<td>{{$barang->nama}}</td>
									<td>{{$barang->merk}}</td>
									<td class="text-right">{{number_format($barang->harga1,0)}}</td>
									<td>
										<a class="edit ik ik-edit" data-id="{{$barang->kode}}"></a>
										<a class="delete ik ik-trash-2" data-id="{{$barang->kode}}"></a>
										</a>
									</td>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>KODE</th>
								<th>NAMA</th>
								<th>MERK</th>
								<th>HARGA</th>
								<th>AKSI</th>
							</tr>							
						</tfoot>
					</table>
					{{ $data_barang->links() }}
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
		      <div class="modal-body">
		        <form>
		        	{{csrf_field()}}
		        	<div class="row">
						 		  <div class="col-md-6 form-group">
								    <label for="kode">Kode</label>
								    <input name="kode" type="text" class="form-control form-control-bold required" id="kode" required="true">
								  </div>

								  <div class="col-md-6 form-group">
								    <label for="jenis">jenis</label>
								    <input name="jenis" type="text" class="form-control" id="jenis">
								  </div>
							</div>
							<div class="row">
								 	<div class="col-md-6 form-group">
								    <label for="nama">Nama</label>
								    <input name="nama" type="text" class="form-control" id="nama">
								  </div>
								  <div class="col-md-6 form-group">
								    <label for="merk">Merk</label>
								    <input name="merk" type="text" class="form-control" id="merk">
								  </div>
							</div>
							<div class="row">
					   		<div class="col-md-12 form-group">
					   			<label for="deskripsi">Deskripsi</label>
									<textarea rows="4" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Barang; Contoh : Warna, Spesifikasi, dll"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="card">
									<div class="card-header">
										<h3>HARGA</h3>
									</div>
									<div class="card-body">
								    <div class="row">
									    <div class="input-group input-group-primary col-md-4">
									    	<label class="col-form-label" for="hbeli">H Beli</label>
									    	<input class="form-control" id="hbeli" style="text-align: right;" type="number" name="hbeli">
									    </div>
									    <div class="col-md-4 input-group">
									    	<label class="col-form-label" for="harga1">Harga1</label>
									    	<input class="form-control" id="harga1" style="text-align: right;" type="number" name="harga1">
									    </div>
									    <div class="input-group col-md-4">
									    	<label class="col-form-label" for="harga2">Harga2</label>
									   		<input class="form-control" id="harga2" style="text-align: right;" type="number" name="harga2">
									    </div>
									  </div>
									  <div class="row">
									    <div class="col-md-4 form-group form-input-primary">
									    	<label class="col-form-label" for="harga3">Harga3</label>
									    	<input class="form-control" id="harga3" style="text-align: right;" type="number" name="harga3">
									    </div>
									    <div class="col-md-4 form-group">
									    	<label class="col-form-label" for="harga4">Harga4</label>
									    	<input class="form-control" id="harga4" style="text-align: right;" type="number" name="harga4">
									    </div>
									    <div class="col-md-4 form-group">
									    	<label class="col-form-label" for="harga5">Harga5</label>
									    	<input class="form-control" id="harga5" style="text-align: right;" type="number" name="harga5">
									    </div>
									  </div>
								  </div>
								</div>
						  </div>
						  <div class="modal-footer">
				        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				        	<button type="button" id="btnsimpan" value="Simpan" class="btn btn-primary">Simpan</button>
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
  // Add record
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
        	var findnorecord = $('#data_table tr.norecord').length;
        	status = status + ' ' + response;
          if(findnorecord > 0){
            $('#data_table tr.norecord').remove();
          }
          var tr_str = "<tr id='kdbr" + kode + "'>"+
          "<td>" + kode + "</td>" +
          "<td>" + nama + "</td>" +
          "<td>" + merk + "</td>" +
          "<td class='text-right'> " + number_format(harga1,2) + "</td>" +
					"<td>" +
						"<a class='edit ik ik-edit' data-id='" + kode + "'></a>" +
						"<a class='delete ik ik-trash-2' data-id='" + kode + "'></a>" +
					"</td>" +
          "</tr>";
          if(tipesimpan == 'Update'){
          	$("#kdbr" + kode).replaceWith(tr_str);
          }else{
          	$("#data_table tbody").prepend(tr_str);
          }

          
       	$('#dialogbaru').modal('hide');
        //$('#kode').focus();
        // Empty the input fields
        showalert(response,'alert-success');
        }
      });
    }else{
      alert('Fill all fields');
    }
  });

});


// Delete record
$(document).on("click", ".delete" , function() {
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

// Edit record
$(document).on("click", ".edit" , function() {
  var aid = $(this).data('id');
   $.get('/barang/' + aid + '/edit', function (data) {
   		$('#kode').disabled = true;
   		$('#btnsimpan').val('Update');
      $('#btnsimpan').html('Update');
      $('#dialogbaruLabel').html("Edit Data Barang");
      $('#nama').val(data.nama);
      $('#kode').val(aid);
      $('#jenis').val(data.jenis);
      $('#merk').val(data.merk);
      $('#hbeli').val(data.hbeli);
      $('#deskripsi').val(data.deskripsi);
      $('#harga1').val(data.harga1);
      $('#harga2').val(data.harga2);
      $('#harga3').val(data.harga3);
      $('#harga4').val(data.harga4);
      $('#harga5').val(data.harga5);
      $('#dialogbaru').modal('show');
      $('#nama').focus;
      // $('#e').val(data.);
    })
  var el = this;
 	         
});
$(document).on("click", ".tambah" , function() {
  $('#btnsimpan').val('Simpan');
  $('#btnsimpan').html('Simpan');
  $('#dialogbaruLabel').html("Input Data Barang Baru");
  $('#nama').val('');
  $('#kode').val(''); $('#kode').disabled = false;
  $('#jenis').val('');
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

  // $('#e').val(data.);
})
</script>
<script>window.jQuery || document.write('<script src="/assets/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
				<script src="/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
				<script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
				<script src="/assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
				<script src="/assets/plugins/screenfull/dist/screenfull.js"></script>
				<script src="/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
				<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
				<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
				<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
				<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
				<script src="/assets/plugins/jvectormap/jquery-jvectormap.min.js"></script>
				<script src="/assets/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
				<script src="/assets/plugins/moment/moment.js"></script>
				<script src="/assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
				<script src="/assets/plugins/d3/dist/d3.min.js"></script>
				<script src="/assets/plugins/c3/c3.min.js"></script>
				<!-- <script src="/assets/js/tables.js"></script> -->
				<script src="/assets/js/widgets.js"></script>
				<script src="/assets/js/charts.js"></script>
				<script src="/assets/js/sic.js"></script>
				<script src="/assets/js/form-advanced.js"></script>
        
				<script src="/assets/dist/js/theme.min.js"></script>
				<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
				<script>

</body>
</html>
@endsection