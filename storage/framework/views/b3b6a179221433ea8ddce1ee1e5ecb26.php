<?php $__env->startSection('title', 'Liste des options'); ?>

<?php $__env->startSection('content'); ?>

    <div class="d-sm-flex justify-content-between align-items-start">
      <div>
        <h4 class="card-title card-title-dash title"><?php echo $__env->yieldContent('title'); ?></h4>
      </div>
      <div>
        <a href="<?php echo e(route('admin.option.create')); ?>" class="btn btn-primary btn-sm text-white mb-0 me-0" type="button" >+ Ajouter une option</a>
      </div>
    </div>
    <table class="table table-stripped">
      <thead>
        <tr>
          <th>Nom</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($option->name); ?></td>
          <td>
            <div class="d-flex gap-2 w-100 justify-content-end">
              <a href="<?php echo e(route('admin.option.edit', $option)); ?>" class="btn btn-warning btn-sm">Editer</a>
              <form action="<?php echo e(route('admin.option.destroy', $option)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button class="btn btn-danger btn-sm">Supprimer</button>
              </form>
            </div>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="5" class="text-secondary text-center">Aucune option disponible</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
    <?php echo e($options->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/admin/options/index.blade.php ENDPATH**/ ?>