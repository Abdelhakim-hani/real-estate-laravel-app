<?php
  $class ??= null;
  $name ??= '';
  $value ??= '';  
  $label ??= Str::ucfirst($name);
?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['form-check form-switch', $class]); ?>">
  <input type="hidden" name="<?php echo e($name); ?>" value="0">
  <input type="checkbox" class="form-check-input <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" role="switch" value="1" <?php if(old($name, $value ?? false)): echo 'checked'; endif; ?>>
  <label for="<?php echo e($name); ?>" class="form-check-label"><?php echo e($label); ?></label>
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
</div><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/components/checkbox.blade.php ENDPATH**/ ?>