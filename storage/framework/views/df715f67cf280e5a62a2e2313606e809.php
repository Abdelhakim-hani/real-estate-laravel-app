

<?php $__env->startSection('title', 'Contactez-nous'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<?php $__env->startSection('content'); ?>
<!-- Contact Section -->
<section class="py-5" style="background: #f0fdfa;">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">Contactez-nous</h2>

    <div class="row g-4">
      <!-- Contact Form -->
      <div class="col-md-6 animate-fadeup delay-2">
        <form method="POST" action="<?php echo e(route('contact.send')); ?>">
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-teal px-4 py-2 rounded-pill shadow">Envoyer</button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="col-md-6 animate-fadeup delay-4">
        <div class="p-4 shadow-sm rounded bg-white h-100">
          <h5 class="fw-semibold mb-3">Nos coordonnées</h5>
          <p><i class="bi bi-geo-alt-fill text-teal"></i> 123 Rue Principale, Agadir, Maroc</p>
          <p><i class="bi bi-telephone-fill text-teal"></i> +212 6 12 34 56 78</p>
          <p><i class="bi bi-envelope-fill text-teal"></i> contact@immo.ma</p>

          <div class="mt-4">
            <h6 class="fw-semibold">Suivez-nous :</h6>
            <a href="#" class="text-teal me-3"><i class="bi bi-facebook fs-4"></i></a>
            <a href="#" class="text-teal me-3"><i class="bi bi-instagram fs-4"></i></a>
            <a href="#" class="text-teal"><i class="bi bi-linkedin fs-4"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/contact.blade.php ENDPATH**/ ?>