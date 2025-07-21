<?php $__env->startSection('title', 'Liste des biens'); ?>

<?php $__env->startSection('content'); ?>

    <div class="d-sm-flex justify-content-between align-items-start">
      <div>
        <h4 class="card-title card-title-dash title"><?php echo $__env->yieldContent('title'); ?></h4>
      </div>
      <div>
        <a href="<?php echo e(route('admin.property.create')); ?>" class="btn btn-primary btn-sm text-white mb-0 me-0" type="button" >+ Ajouter un bien</a>
      </div>
    </div>
    <table class="table table-stripped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Surface</th>
          <th>Ville</th>
          <th>Prix</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($property->title); ?></td>
          <td><?php echo e($property->surface); ?> m²</td>
          <td><?php echo e($property->city); ?></td>
          <td><?php echo e(number_format(num:$property->price, decimals:2, decimal_separator:'.', thousands_separator:' ')); ?> DH</td>
          <td>
            <div class="d-flex gap-2 w-100 justify-content-end">
              <a href="<?php echo e(route('admin.property.edit', $property)); ?>" class="btn btn-warning btn-sm">Editer</a>
              <form action="<?php echo e(route('admin.property.destroy', $property)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button class="btn btn-danger btn-sm">Supprimer</button>
              </form>
            </div>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="5" class="text-secondary text-center">Aucun bien disponible</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
    <?php echo e($properties->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/admin/properties/index.blade.php ENDPATH**/ ?>