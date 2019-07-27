<nav>
  <ul class="pagination justify-content-end">
  	{{ $data_barang->appends(request()->only('cari'))->links() }}
  </ul>
</nav>
<table id="data_tableku" class="table ">
	<thead class="thead-dark2">
		<tr>
			<th>@sortablelink('kode','KODE')</th>
			<th>@sortablelink('nama','NAMA')</th>
			<th>@sortablelink('merk','MERK')</th>
			<th>@sortablelink('harga','HARGA')</th>
			<!-- <th>KODE</th>
			<th>NAMA</th>
			<th>MERK</th>
			<th>HARGA</th>
			<th>AKSI</th> -->
		</tr>
	</thead>
	<tbody>
		@foreach($data_barang as $barang)
			<tr data-id="{{$barang->kode}}" id="kdbr{{$barang->kode}}">
				<td>{{$barang->kode}}</td>
				<td>{{$barang->nama}}</td>
				<td>{{$barang->merk}}</td>
				<td class="text-right">{{number_format($barang->harga1,0)}}</td>
<!-- 				<td>
					<a class="editx ik ik-edit" data-id="{{$barang->kode}}"></a>
					<a class="deletex ik ik-trash-2" data-id="{{$barang->kode}}"></a>
				</td>
 -->			</tr>
		@endforeach
	</tbody>
</table>
     
<!-- <script>
	
	$(document).ready( function () {
		$('#data_tableku').DataTable({
			destroy: true,
      processing: true,
      paging: false,
   		length:false,
  		/*scroller: false, scrollY: 600,*/
  		sort:false,
			deferRender: false,
			deferLoading:0,
			select: true,
   		dom: 'Brtp',
      buttons: [
            {text: 'Tambah',className: 'tambah btn btn-primary'},
            {text: 'Edit', className: 'btedit btn btn-success'},
            {text: 'hapus', className: 'bthapus btn btn-danger'},            
        ],
    });
		var table = $('#data_tableku').DataTable();
		var kode ='';
		$('#data_tableku tbody').on( 'click', 'tr', function () {
			var id = $(this).data('id');
			if(id != undefined){kode=id;}
			if ( $(this).hasClass('selected') ) {$(this).removeClass('selected');}else{
				table.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
			}
    });
    
    $('.bthapus').click( function () {
      if(confirm(kode+': Yakin mau dihapus?')){
		  	$.ajax({
		    	url: '/barang/delete/' + kode,
		    	type: 'get',
		    	success: function(response){
		    		table.row('.selected').remove().draw( false );
		    		showalert(response,'alert-success');
		    	}
		    })
		  }
    });
     $(document).on("click", ".btedit" , function() {
	 	editdata(kode);
	 });
	

} );

	 console.timeEnd('render');
	 $('table tr').dblclick(function(){
	 	var id = $(this).data('id');
	 	editdata(id);
	 });
</script> -->