<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
function editdata(kode){
	 $.get('/barang/edit/' + kode , function (data) {
   		$('#kode').disabled = true;
   		$('#btnsimpan').val('Update');
      $('#btnsimpan').html('Update');
      $('#dialogbaruLabel').html("Edit Data Barang");
      $('#kode').val(kode);
      $('#nama').val(data.nama);
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
    });
}
function hapusdata(kode, arow) {
	  var el = arow;
	  if(confirm('Yakin mau dihapus?')){
	  $.ajax({
	    url: '/barang/delete/' + kode,
	    type: 'get',
	    success: function(response){
				showalert('2','alert-danger');	     
	      $(el).closest( "tr" ).remove();
	      showalert(response,'alert-success');
	    }
	  });
	}
};


$(document).ready(function(){

	function clear_icon(){$('#id_icon').html(''); $('#post_title_icon').html('');}
	function fetchdata(page, sort_type, sort_by, query){
		showalert("ajax url:/barang/fetchdata?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query);
	  
    $.ajax({ url:"/barang/fetchdata?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
			success:function(data){
	    	showalert('fetchdata done');
	    	$('tbody').html('');
	    	$('tbody').html(data);
	   	}

	  })
	}
	 
	$(document).on('click', '.sorting', function(){
		var column_name = $(this).data('column_name');
		var order_type = $(this).data('sorting_type');
		var reverse_order = '';
    var page = 1;
    $('#hal').val(1);
		if(order_type == 'asc'){$(this).data('sorting_type', 'desc');
   		reverse_order = 'desc';
   		clear_icon();
   		$('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
  	}else{
   		$(this).data('sorting_type', 'asc');
   		reverse_order = 'asc';
   		clear_icon();
   	$('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
  	}
  	$('#disort').val(column_name);
  $('#sorttype').val(reverse_order);
  var query = $('#cari').val();
  showalert('sort');
  fetchdata(page, reverse_order, column_name, query);
 });

	$(document).on('click', '.pagination a', function(event){
  	event.preventDefault();
  	var page = $(this).attr('href').split('page=')[1];
  	$('#hal').val(page);
  	var column_name = $('#disort').val();
  	var sort_type = $('#sorttype').val();
  	var query = $('#cari').val();

  	$('li').removeClass('active');
    $(this).parent().addClass('active');
  	fetchdata(page, sort_type, column_name, query);
 });

 

 function fetch_data(page){
 	$.ajax({
   url:"/barang/fetch_data?page="+page,
   success:function(data){$('#table_data').html(data);}
  });
 }
	
	$('#btnsimpan').click(function(){
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
        	var findnorecord = $('#data_tableku tr.norecord').length;
        	status = status + ' ' + response;
          if(findnorecord > 0){
            $('#data_tableku tr.norecord').remove();
          }
          var tr_str = "<tr data-id='" + kode + "' id='kdbr" + kode + "'>"+
          "<td>" + kode + "</td>" +
          "<td>" + nama + "</td>" +
          "<td>" + merk + "</td>" +
          "<td class='text-right'> " + number_format(harga1,0) + "</td>" +
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

  $('#cari').on('keyup',function(){
  	var query = $('#cari').val();
    var column_name = $('#disort').val();
    var sort_type = $('#sorttype').val();
    var page = 1;
    $('#hal').val(1);
    fetchdata(page, sort_type, column_name, query);
  });

  $('#cari1').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
      type : 'get',
      url : '<?php echo e(URL::to('barang/cari')); ?>',
      data:{'cari':$value},
      success:function(data){
        $('tbody').html(data);
    
      }
    });
  });


});
$('.table tr').dblclick(function(){
    var id = $(this).data('id');
    editdata(id);
   });
$('.table tr').click(function(event){
    var id = $(this).data('id');
   $('#kdbr').val(id);
   
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

</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
</script>

<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\laravel-crud\resources\views/barang/abjs.blade.php ENDPATH**/ ?>