<?php
  $class ??= null;
  $name ??= '';
  $value ??= '';
  $label ??= Str::ucfirst($name);
  $options ??= [];
  $multiple ??= false;
  $placeholder ??= $label;
?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['form-group', $class]); ?>">
  <label for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
  <select class="form-select" id="<?php echo e($name); ?>" name="<?php echo e($name); ?><?php if(!$multiple): ?>" <?php else: ?>[]" multiple <?php endif; ?> data-placeholder="<?php echo e($placeholder); ?>">
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option <?php if($value->contains($v)): echo 'selected'; endif; ?> value="<?php echo e($v); ?>"><?php echo e($option); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
  <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <div class="invalid-feedback">
    <?php echo e($message); ?> 
  </div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/components/select.blade.php ENDPATH**/ ?>