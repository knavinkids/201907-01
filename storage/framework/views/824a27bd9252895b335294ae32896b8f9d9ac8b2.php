<?php $__env->startSection('content'); ?>
<?php
use Illuminate\Http\Request;
?>
	<div class="container-fluid">	
		<div class="navbar-form navbar-left">
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
		</div>
		<form class="navbar-form navbar-right"  method="GET" action="/kontak<?php echo e($xtipe); ?>">
			<div class="input-group">
				<input name="cari" type="text" class="form-control" value="<?php echo e(request()->get('cari')); ?>" placeholder="Search dashboard...">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-primary">Cari</button>
				</span>
			</div>
		</form>
	</div>
	<?php if(session('sukses')): ?>
		<div class="alert alert-success" role="alert">
				<?php echo e(session('sukses')); ?>

		</div>
	<?php endif; ?>
<table id="demo_table" class="table table-bordered table-striped">
 	<thead>
 		<tr>
			<th>KODE</th>
			<th>TIPE</th>
			<th>NAMA</th>
			<th>KOTA</th>
			<th>TELP</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody id="myTable">
		<?php $__currentLoopData = $data_kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($dt->kode); ?></td>
			<td><?php echo e($dt->tipe); ?></td>
			<td><?php echo e($dt->nama); ?></td>
			<td><?php echo e($dt->kota); ?></td>
			<td><?php echo e($dt->telp); ?></td>
			<td>
				<a href="/kontak/<?php echo e($dt->kode); ?><?php echo e($xtipe); ?>/edit" class="lnr lnr-pencil"></a>
				<a href="/kontak/<?php echo e($dt->kode); ?><?php echo e($xtipe); ?>/delete" class="lnr lnr-trash" onclick="return confirm('Yakin mau dihapus?')"></a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
			<?php echo e($data_kontak->appends(request()->only('cari'))->links()); ?>

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
	        <form action="/kontak<?php echo e($xtipe); ?>/baru" method="POST">
	        	<?php echo e(csrf_field()); ?>

					 <div class="col-sm-12 form-group">
							<div class="col-xl-8 form-group">
							  <div class="col-sm-6 form-group">
							    <label for="Ekode">KODE</label>
							    <input name="kode" type="text" class="form-control required" id="Ekode" required="true">
							  </div>

							  <div class="col-sm-6 form-group">
							    <label for="etipe">TIPE</label>
							    <input name="tipe" type="text" class="form-control" id="etipe" value="<?php echo e(strtoupper($tipe)); ?>">
							  </div>
							
							 	<div class="col-sm-6 form-group">
							    <label for="enama">NAMA</label>
							    <input name="nama" type="text" class="form-control" id="Enama">
							  </div>
							  <div class="col-sm-6 form-group">
							    <label for="ekota">KOTA</label>
							    <input name="kota" type="text" class="form-control" id="ekota">
							  </div>
							  <div class="col-sm-6 form-group">
							    <label for="etelp">TELP</label>
							    <input name="telp" type="text" class="form-control" id="etelp">
							  </div>
				  		</div>
					  	<div class="col-xl-4 form-group">
					    	<label for="edesk">Deskripsi</label>
							<textarea rows="4" name="deskripsi" class="form-control" id="edesk" placeholder="Masukkan Deskripsi Kontak 
Contoh : No. Rekening, Keterangan Penagihan, dll"></textarea>
					  	</div>
					  </div>
					  
					  <div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="submit" class="btn btn-primary">Save changes</button>
	      	  </div>
	     		</form>
	     	</div>
	      
	    </div>
	  </div>
	 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bootstrap_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\resources\views/kontak/index.blade.php ENDPATH**/ ?>