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
      </tr><?php /**PATH C:\xampp\htdocs\laravel-crud\resources\views/barang/tableisi.blade.php ENDPATH**/ ?>