<div class="col-12 table-responsive">
	<table id="data_tableku" class="table table-striped table-sm">
		<thead class="thead-dark2">
			<tr>
				<th class="sorting" data-sorting_type="asc" data-column_name="KODE" style="cursor: pointer">KODE <span id="kode_icon"></span></th>
       	<th class="sorting" data-sorting_type="asc" data-column_name="NAMA" style="cursor: pointer">NAMA <span id="nama_icon"></span></th>
      	<th class="sorting" data-sorting_type="asc" data-column_name="MERK" style="cursor: pointer">MERK <span id="merk_icon"></span></th>
       	<th class="sorting" data-sorting_type="asc" data-column_name="HARGA" style="cursor: pointer">HARGA <span id="harga_icon"></span></th>
   		</tr>
		</thead>
		<tbody>
			@foreach($data_barang as $barang)
				<tr data-id="{{$barang->kode}}" id="kdbr{{$barang->kode}}">
					<td>{{$barang->kode}}</td>
					<td>{{$barang->nama}}</td>
					<td>{{$barang->merk}}</td>
					<td class="text-right">{{number_format($barang->harga1,0)}}</td>
				</tr>
			@endforeach
			<tr>
       <td colspan="4" align="center">
        {!! $data_barang->links() !!}
       </td>
      </tr>
		</tbody>
	</table>
	 			
</div>
@push('scripts')
<script type="text/javascript">
	$(document).ready(function(){

	$('.table tr').click(function(event){
    var id = $(this).data('id');
   $('#kdbr').val(id);
   
});
}
</script>
@endpush
