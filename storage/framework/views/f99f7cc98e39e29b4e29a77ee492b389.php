<?php
  $type ??= 'text';
  $class ??= null;
  $name ??= '';
  $value ??= '';  
  $label ??= Str::ucfirst($name);
  $placeholder ??= $label;
  $multiple ??= false;
?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['form-group', $class]); ?>">
  <label for="<?php echo e($name); ?>" class="form-label"><?php echo e($label); ?></label>
  <?php if($type === 'textarea'): ?>
  <textarea class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder); ?>"><?php echo e(old($name, $value)); ?></textarea>
  <?php else: ?>
  <input type="<?php echo e($type); ?>" class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="<?php echo e($name); ?>" name="<?php echo e($name); ?><?php if(!$multiple): ?>" <?php else: ?>[]" multiple <?php endif; ?> value="<?php echo e(old($name, $value)); ?>" placeholder="<?php echo e($placeholder); ?>">
  <?php endif; ?>
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
</div><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/components/input.blade.php ENDPATH**/ ?>