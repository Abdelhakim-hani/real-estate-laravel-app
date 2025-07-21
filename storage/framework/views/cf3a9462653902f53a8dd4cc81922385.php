<?php $__env->startSection('title', $option->exists ? 'Editer l\'option' : 'Ajouter une option'); ?>

<?php $__env->startSection('content'); ?>
    <h4><?php echo $__env->yieldContent('title'); ?></h4>

    <form class="row" action="<?php echo e(route($option->exists ? 'admin.option.update' : 'admin.option.store', $option)); ?>" method="post" enctype="multipart/form-data">
      <?php echo method_field($option->exists ? 'put' : 'post'); ?>
      <?php echo csrf_field(); ?>
      
      <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['class' => 'col-md-12','label' => 'Nom','name' => 'name','value' => $option->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-md-12','label' => 'Nom','name' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($option->name)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
      
      <div class="d-flex justify-content-center">
        <?php if(request()->route()->getName() === 'admin.option.edit'): ?>
          <button type="submit" class="btn btn-warning m-2">Modifier</button>
          <a href="<?php echo e(route('admin.option.index')); ?>" class="btn btn-secondary m-2">Annuler</a>
        <?php else: ?>
          <button type="submit" class="btn btn-primary m-2">Enregistrer</button>
          <button type="reset" class="btn btn-secondary m-2">Annuler</button>
        <?php endif; ?>
      </div>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/admin/options/form.blade.php ENDPATH**/ ?>