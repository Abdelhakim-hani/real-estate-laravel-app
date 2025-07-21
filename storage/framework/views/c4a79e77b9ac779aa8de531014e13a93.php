<?php $__env->startSection('title', "Les biens | IZ"); ?>

<?php $__env->startSection('content'); ?>

  <div class="bg-light p-5 text-center">
    <form action="" method="get" class="container d-flex gap-2">
      <input type="number" name="surface" value ="<?php echo e($input['surface'] ?? ''); ?>" class="form-control" placeholder="Surface min">
      <input type="number" name="rooms" value ="<?php echo e($input['rooms'] ?? ''); ?>" class="form-control" placeholder="Pièces min">
      <input type="number" name="price" value ="<?php echo e($input['price'] ?? ''); ?>" class="form-control" placeholder="Budget max">
      <input type="text" name="title" value ="<?php echo e($input['title'] ?? ''); ?>" class="form-control" placeholder="Mot clef">
      <button class="btn btn-primary btn-sm d-flex grow-0">Rechercher</button>
    </form>
  </div>

  <div class="container">
    <h2>Tous nos biens</h2>
    <div class="row">
      <?php $__empty_1 = true; $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-3 mb-4">
          <?php echo $__env->make('property.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <p class="text-center text-secondary">Pas du biens correspond à vos besoins</p>
      <?php endif; ?>
    </div>
    <?php echo e($properties->links()); ?>

  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/property/index.blade.php ENDPATH**/ ?>