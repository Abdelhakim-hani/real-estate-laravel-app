

<?php $__env->startSection('title', 'À propos de Immo'); ?>

<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<section class="py-5" style="background: #f0fdfa;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Image -->
      <div class="col-md-6 mb-4 mb-md-0 animate-fadeup">
        <img src="<?php echo e(asset('https://cdndailyexcelsior.b-cdn.net/wp-content/uploads/2022/07/real-estate.jpg')); ?>" alt="Notre agence" class="img-fluid rounded-4 shadow-lg">
      </div>
      
      <!-- Right Text -->
      <div class="col-md-6 animate-fadeup delay-2">
        <h2 class="fw-bold mb-3" style="color:#0d9488;">Notre Histoire</h2>
        <p class="lead">Depuis notre création, <strong>Immo</strong> accompagne ses clients dans la quête du bien immobilier idéal. Notre passion : transformer vos rêves en adresses réelles.</p>
        <p>Nous combinons expertise du marché, accompagnement personnalisé, et technologie moderne pour offrir une expérience fluide, transparente et humaine.</p>
        <ul class="list-unstyled mt-4">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> +10 ans d’expérience sur le marché marocain</li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Équipe d’experts disponibles 7j/7</li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Plateforme intuitive pour vendre, louer ou acheter</li>
        </ul>
        

      </div>
    </div>
  </div>
</section>
<!-- Vision Section -->
<section class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="fw-bold mb-4" style="color:#0d9488;">Notre Vision</h2>
    <p class="lead mb-5">Créer un avenir où chaque famille trouve un lieu de vie qui lui ressemble.</p>
    
    <div class="row g-4">
      <div class="col-md-4 animate-fadeup delay-2">
        <div class="p-4 border rounded-4 shadow-sm h-100">
          <i class="bi bi-lightbulb fs-1 text-teal mb-3"></i>
          <h5 class="fw-semibold mb-2">Innovation</h5>
          <p>Nous utilisons la technologie pour simplifier la recherche immobilière et améliorer la qualité du service.</p>
        </div>
      </div>
      <div class="col-md-4 animate-fadeup delay-4">
        <div class="p-4 border rounded-4 shadow-sm h-100">
          <i class="bi bi-heart-pulse fs-1 text-teal mb-3"></i>
          <h5 class="fw-semibold mb-2">Confiance</h5>
          <p>Transparence et accompagnement humain à chaque étape de votre projet immobilier.</p>
        </div>
      </div>
      <div class="col-md-4 animate-fadeup delay-6">
        <div class="p-4 border rounded-4 shadow-sm h-100">
          <i class="bi bi-people fs-1 text-teal mb-3"></i>
          <h5 class="fw-semibold mb-2">Communauté</h5>
          <p>Nous construisons plus que des biens — nous bâtissons des liens durables avec nos clients.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/about.blade.php ENDPATH**/ ?>