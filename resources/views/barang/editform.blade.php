<form>
	{{csrf_field()}}
	<div class="row">
		<div class="col-md-8">
		  <div class="card">
		  	<div class="card-body">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="form-group">
			    		<label for="kode">Kode</label>
			    		<input name="kode" type="text" class="form-control form-control-bold required" id="kode" required="true">
			  		</div>
			  	</div>
			  	<div class="col-md-6">
			  		<div class="form-group">
			    		<label for="jenis">jenis</label>
			    		<input name="jenis" type="text" class="form-control" id="jenis">
			  		</div>
	  			</div>
			  </div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">    
					    <label for="nama">Nama</label>
					    <input name="nama" type="text" class="form-control" id="nama">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-group">
					    <label for="merk">Merk</label>
					    <input name="merk" type="text" class="form-control" id="merk">
					  </div>
					</div>
				</div>
				<div class="row">
			 		<div class="col-md-12 form-group">
			 			<label for="deskripsi">Deskripsi</label>
						<textarea rows="4" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Barang; Contoh : Warna, Spesifikasi, dll"></textarea>
					</div>
				</div>
			</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h3>HARGA</h3>
				</div>
				<div class="card-body">
			    <div class="row">
			    	<div class="col-md-4 input-group input-group-primary">
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
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					Foto
				</div>
			</div>
		</div>
	</div>

</form>
		    