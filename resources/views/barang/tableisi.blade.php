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