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
			<?php $__currentLoopData = $data_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr data-id="<?php echo e($barang->kode); ?>" id="kdbr<?php echo e($barang->kode); ?>">
					<td><?php echo e($barang->kode); ?></td>
					<td><?php echo e($barang->nama); ?></td>
					<td><?php echo e($barang->merk); ?></td>
					<td class="text-right"><?php echo e(number_format($barang->harga1,0)); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<tr>
       <td colspan="4" align="center">
        <?php echo $data_barang->links(); ?>

       </td>
      </tr>
		</tbody>
	</table>
	 			
</div>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
	$(document).ready(function(){

	$('.table tr').click(function(event){
    var id = $(this).data('id');
   $('#kdbr').val(id);
   
});
}
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\laravel-crud\resources\views/barang/table.blade.php ENDPATH**/ ?>