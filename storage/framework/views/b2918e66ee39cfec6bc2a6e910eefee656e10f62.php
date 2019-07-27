<?php $__env->startSection('content'); ?>
<?php use Illuminate\Http\Request;?>

	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />


	<div class="row">
		<div class="card-body">
	 		<div class="row invoice-info">
		    <div class="col-sm-6 invoice-col">
		 		<button class="tambah btn btn-primary">Tambah</button>
		 		<button class="bthapus btn btn-danger">Hapus</button>
		 		</div>
		    <div class="col-sm-6 invoice-col">
						<div class="input-group">

							<input name="cari" id="cari" type="text" class="form-control" value="<?php echo e(request()->get('cari')); ?>" placeholder="Search dashboard...">
							<span class="input-group-btn">
								<button class="btncari btn btn-primary">Cari</button>
							</span> 
						</div>
		 		</div>
		 		
		 	</div>
	 		<div class="row">
	 				<?php echo $__env->make('barang.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		    
	 	  </div>
	  </div>
	</div>

	<input type="hidden" name="hal" id="hal" value="1" />
  <input type="hidden" name="disort" id="disort" value="kode" />
  <input type="hidden" name="sorttype" id="sorttype" value="asc" />
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
	      	<?php echo $__env->make('barang.editform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	      </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        	<button type="button" id="btnsimpan" value="Simpan" class="btn btn-primary">Simpan</button>
	     	</div>
		      
	    </div>
	  </div>
	</div>
	<div class="row">
		 			<div class="col-12 invoice-col">
		 				<div id = "alert_placeholder"></div>
		    	</div>
		    </div>
	<input type="text" name="kdbr" id="kdbr" value="" />
  

<?php echo $__env->make('barang.abjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bootstrap_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\resources\views/barang/ab.blade.php ENDPATH**/ ?>