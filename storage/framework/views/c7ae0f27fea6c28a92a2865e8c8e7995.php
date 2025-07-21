<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

  <!-- Google Fonts for branding -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

  <style>
    .navbar-brand {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.8rem;
      letter-spacing: 1px;
      font-weight: bold;
      color: #0a3d62 !important;
    }

    .nav-link {
      font-weight: 500;
      color: #34495e !important;
      transition: all 0.3s ease;
    }

    .nav-link:hover, .nav-link.active {
      color: #0a3d62 !important;
      border-bottom: 2px solid #0a3d62;
    }

    .navbar {
      background: #ecf0f1 !important;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);
    }

    .navbar-toggler {
      border: none;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%2810, 61, 98, 0.8%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .btn-cta {
      background-color: #0a3d62;
      color: white !important;
      padding: 0.5rem 1.2rem;
      border-radius: 10px;
      font-weight: 500;
      transition: background 0.3s ease;
    }

    .btn-cta:hover {
      background-color: #07456f;
    }
  </style>
</head>
<body>
  <?php
    $routeName = request()->route();
  ?>

  <nav class="navbar navbar-expand-lg mb-3 py-3">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('index')); ?>">Immo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
          <li class="nav-item">
            <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => $routeName->getName() === 'index']); ?>" href="<?php echo e(route('index')); ?>">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => $routeName->getName() === 'property.index']); ?>" href="<?php echo e(route('property.index')); ?>">Biens</a>
          </li>
          <li class="nav-item">
            <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link']); ?>" href="<?php echo e(route('about')); ?>">À propos</a>
          </li>
          <li class="nav-item">
            <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link']); ?>" href="<?php echo e(route('services')); ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link']); ?>" href="<?php echo e(route('blog')); ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link']); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>
          </li>

          <!-- Optional: Dropdown for user authentication -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Compte
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>">Connexion</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('register')); ?>">Inscription</a></li>
            </ul>
          </li>
        </ul>

        <!-- Call to action button -->
        <div class="d-flex">
          <a href="<?php echo e(route('property.create')); ?>" class="btn btn-cta">Déposer un bien</a>
        </div>
      </div>
    </div>
  </nav>

  <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/layout/layout.blade.php ENDPATH**/ ?>