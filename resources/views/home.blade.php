@extends('layout.layout')

@section('title', 'Accueil')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


<!-- Hero Section with Background Image -->
<section id="hero" class="position-relative py-5 mb-5"
  style="color: white;
         overflow: hidden;
         min-height: 90vh;
         display: flex;
         align-items: center;
         justify-content: center;
         text-align: center;
         padding: 0 20px;
         background: url('https://t3.ftcdn.net/jpg/01/41/14/76/360_F_141147632_revBO3mgrWS2Y6KqeyYT8J87XFFpqs7X.jpg') no-repeat center center;
         background-size: cover;">

  <!-- Overlay -->
  <div style="position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: rgba(0, 0, 0, 0.5);
              z-index: 0;">
  </div>

  <!-- Content -->
  <div style="position: relative; z-index: 1; max-width: 700px;">
    <h1 class="display-4 fw-bold"
        style="animation: fadeUp 1s ease forwards;
               animation-delay: 0.5s;
               opacity: 0;
               transform: translateY(20px);">
      Bienvenue chez Agence Immobilière
    </h1>
    <p class="lead mt-3 mb-4"
       style="animation: fadeUp 1s ease forwards;
              animation-delay: 1s;
              opacity: 0;
              transform: translateY(20px);">
      Découvrez des maisons élégantes, des appartements modernes et des locaux commerciaux de premier choix.
      Nos agents experts vous accompagnent à chaque étape pour une transaction fluide et sécurisée.
    </p>
    <a href="biens" class="btn btn-lg btn-gradient"
       style="animation: fadeUp 1s ease forwards;
              animation-delay: 1.5s;
              opacity: 0;
              transform: translateY(20px);
              padding: 12px 30px;
              font-size: 1.1rem;
              color: white;
              background: linear-gradient(45deg, #0d9488, #14b8a6);
              border-radius: 5px;
              text-decoration: none;
              display: inline-block;">
      Voir les biens
    </a>
  </div>
</section>

<style>
  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>



<!-- Creative Property Search Bar -->
<section class="bg-white py-5 shadow-sm rounded-4 mb-5 border border-2 border-light position-relative overflow-hidden search-section">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-4">
      <h2 class="fw-bold text-primary-emphasis">
  <i class="bi bi-search"></i> Recherchez Votre Bien Idéal
</h2>

      <p class="text-muted mb-0">Trouvez la maison, villa ou terrain parfait en quelques clics</p>
    </div>

    <!-- Search Form -->
   <form method="GET" action="{{ route('properties.search') }}" class="row g-4 floating-labels">

  <div class="col-md-3 position-relative">
    <i class="bi bi-geo-alt-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
    <input type="text" id="location" name="location" class="form-control rounded-pill ps-5 pe-4" placeholder=" " autocomplete="off">
    <label for="location" class="form-label ps-4">Emplacement (ex: Agadir)</label>
  </div>

  <div class="col-md-2 position-relative">
    <i class="bi bi-house-door-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
    <select id="type" name="type" class="form-select rounded-pill ps-5 pe-4">
      <option value="" disabled selected>Choisir</option>
      <option value="villa">Villa</option>
      <option value="appartement">Appartement</option>
      <option value="terrain">Terrain</option>
    </select>
    <label for="type" class="form-label ps-4">Type</label>
  </div>

  <div class="col-md-2 position-relative">
    <i class="bi bi-currency-dollar position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
    <input type="number" id="price_min" name="price_min" class="form-control rounded-pill ps-5 pe-4" placeholder=" ">
    <label for="price_min" class="form-label ps-4">Prix min</label>
  </div>

  <div class="col-md-2 position-relative">
    <i class="bi bi-currency-dollar position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
    <input type="number" id="price_max" name="price_max" class="form-control rounded-pill ps-5 pe-4" placeholder=" ">
    <label for="price_max" class="form-label ps-4">Prix max</label>
  </div>

  <div class="col-md-2 position-relative">
    <i class="bi bi-door-open-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
    <input type="number" id="rooms" name="rooms" class="form-control rounded-pill ps-5 pe-4" placeholder=" ">
    <label for="rooms" class="form-label ps-4">Pièces</label>
  </div>

  <div class="col-md-1 d-grid">
    <button type="submit" class="btn btn-gradient rounded-pill fw-semibold py-2">
      <i class="bi bi-search me-2"></i>Rechercher
    </button>
  </div>

</form>

  </div>
</section>

<!-- Custom Styling -->
<style>
  .search-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    animation: fadeIn 1s ease-in-out;
  }

  .form-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
    pointer-events: none;
    transition: all 0.2s ease-in-out;
    color: #6c757d;
  }

  .form-control:focus + .form-label,
  .form-control:not(:placeholder-shown) + .form-label,
  .form-select:focus + .form-label,
  .form-select:not(:placeholder-shown) + .form-label {
    top: -0.6rem;
    left: 0.75rem;
    font-size: 0.75rem;
    background: #fff;
    padding: 0 0.25rem;
    color: #0d6efd;
  }

  .btn-gradient {
    background: linear-gradient(to right, #0d6efd, #6610f2);
    color: #fff;
    transition: all 0.3s ease;
  }

  .btn-gradient:hover {
    transform: scale(1.05);
    box-shadow: 0 0.5rem 1rem rgba(13, 110, 253, 0.3);
  }

  @keyframes fadeIn {
    0% { opacity: 0; transform: translateY(15px); }
    100% { opacity: 1; transform: translateY(0); }
  }
</style>


<!-- Latest Properties Section -->
<section id="properties" class="container mb-5">
  <div class="d-flex justify-content-between align-items-center mb-4 animate-fadeup delay-1">
    <h2 class="fw-semibold" style="color:#0d9488;">
  <i class="bi bi-house-fill me-2" style="vertical-align: middle;"></i> Nos Derniers Biens
</h2>

    <a href="biens" class="btn btn-outline-primary btn-animated">Voir tout</a>
  </div>

  <div class="row g-4">
    @forelse ($properties as $property)
      <div class="col-md-4">
        <div class="card shadow-sm rounded property-card animate-fadeup delay-2">
          @include('property.card')
        </div>
      </div>
    @empty
      <div class="col-12 text-center">
        <p class="text-muted">Aucun bien disponible pour le moment.</p>
      </div>
    @endforelse
  </div>
</section>

<!-- About Us -->
<section class="bg-white py-5">
  <div class="container text-center animate-fadeup delay-3">
    <h2 class="fw-bold mb-3" style="color:#0d9488;">À Propos de Nous</h2>
    <p class="lead" style="max-width: 700px; margin: auto;">
      Chez Immo, nous nous engageons à offrir à nos clients une expérience immobilière exceptionnelle.
      Notre équipe vous accompagne avec professionnalisme pour trouver, acheter ou vendre votre bien en toute confiance.
    </p>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">Témoignages de Clients</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card p-4 h-100 testimonial-card">
          <p>“Service impeccable ! L'équipe m'a aidé à trouver ma villa de rêve à Agadir.”</p>
          <div class="text-warning" style="font-size: 1.5rem;">★★★★★</div>
          <small class="text-muted">— Sarah M.</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 h-100 testimonial-card">
          <p>“Très professionnels, ils ont vendu mon appartement rapidement.”</p>
          <div class="text-warning" style="font-size: 1.5rem;">★★★★☆</div>
          <small class="text-muted">— Ahmed B.</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 h-100 testimonial-card">
          <p>“Excellent accompagnement pour mon premier achat immobilier.”</p>
          <div class="text-warning" style="font-size: 1.5rem;">★★★★★</div>
          <small class="text-muted">— Leila K.</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="py-5" style="background: #f0fdfa;">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">Contactez-nous</h2>
    <div class="row g-4">
      <div class="col-md-6 animate-fadeup delay-4">
        <form method="POST" action="{{ route('contact.send') }}">
          @csrf
          <div class="mb-3 position-relative floating-labels">
            <input type="text" name="name" id="name" class="form-control" placeholder=" " required>
            <label for="name">Nom</label>
          </div>
          <div class="mb-3 position-relative floating-labels">
            <input type="email" name="email" id="email" class="form-control" placeholder=" " required>
            <label for="email">Email</label>
          </div>
          <div class="mb-3 position-relative floating-labels">
            <textarea name="message" id="message" rows="4" class="form-control" placeholder=" " required></textarea>
            <label for="message">Message</label>
          </div>
          <button type="submit" class="btn btn-primary btn-animated">Envoyer</button>
        </form>
      </div>
      <div class="col-md-6 animate-fadeup delay-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5327.16634759005!2d-9.598107049999998!3d30.4277545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b6b18f3d2f6b%3A0xbeb2b9e421a4d1d1!2sAgadir!5e0!3m2!1sen!2sma!4v1700000000000" 
          width="100%" height="350" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>

<style>
  /* Animated Gradient Background for Hero */
  .animated-gradient {
    background: linear-gradient(-45deg, #0d9488, #2563eb, #0d9488, #14b8a6);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
  }
  @keyframes gradientBG {
    0% {background-position:0% 50%;}
    50% {background-position:100% 50%;}
    100% {background-position:0% 50%;}
  }

  /* Button with gradient and hover */
  .btn-gradient {
    background: linear-gradient(45deg, #14b8a6, #2563eb);
    border: none;
    color: white;
    box-shadow: 0 4px 15px rgba(20, 184, 166, 0.7);
    transition: all 0.3s ease;
  }
  .btn-gradient:hover {
    background: linear-gradient(45deg, #2563eb, #14b8a6);
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.8);
    transform: translateY(-3px);
  }

  /* Animated buttons for search and contact */
  .btn-animated {
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5);
  }
  .btn-animated:hover {
    box-shadow: 0 8px 20px rgba(0, 123, 255, 0.7);
    transform: translateY(-2px);
  }

  /* Fade up animation */
  .animate-fadeup {
    opacity: 0;
    transform: translateY(30px);
    animation-fill-mode: forwards;
    animation-name: fadeUp;
    animation-duration: 0.8s;
    animation-timing-function: ease-out;
  }
  /* Delays */
  .delay-1 {animation-delay: 0.2s;}
  .delay-2 {animation-delay: 0.5s;}
  .delay-3 {animation-delay: 0.8s;}
  .delay-4 {animation-delay: 1.1s;}
  .delay-5 {animation-delay: 1.4s;}
  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Property Card hover effect */
  .property-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
  }
  .property-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(20, 184, 166, 0.4);
    z-index: 10;
  }

  /* Testimonials card */
  .testimonial-card {
    border-radius: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.3s ease;
  }
  .testimonial-card:hover {
    box-shadow: 0 8px 25px rgba(20, 184, 166, 0.3);
  }

  /* Floating labels */
  .floating-labels .form-control,
  .floating-labels .form-select,
  .floating-labels textarea.form-control {
    padding-top: 1.6rem;
    padding-bottom: 0.6rem;
  }
  .floating-labels label {
    position: absolute;
    top: 0.8rem;
    left: 1rem;
    color: #6c757d;
    font-size: 0.85rem;
    pointer-events: none;
    transition: all 0.3s ease;
  }
  .floating-labels .form-control:focus + label,
  .floating-labels .form-control:not(:placeholder-shown) + label,
  .floating-labels .form-select:focus + label,
  .floating-labels .form-select:not([value=""]) + label,
  .floating-labels textarea.form-control:focus + label,
  .floating-labels textarea.form-control:not(:placeholder-shown) + label {
    top: 0.2rem;
    font-size: 0.75rem;
    color: #14b8a6;
  }
  
  /* Scroll smooth for anchor links */
  html {
    scroll-behavior: smooth;
  }
</style>

<script>
  // Optional: Trigger animations on scroll (for better performance, using IntersectionObserver)
  document.addEventListener('DOMContentLoaded', function () {
    const animElements = document.querySelectorAll('.animate-fadeup');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if(entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
          observer.unobserve(entry.target);
        }
      });
    }, {threshold: 0.1});

    animElements.forEach(el => {
      el.style.animationPlayState = 'paused'; // initially paused
      observer.observe(el);
    });
  });
</script>
<!-- Footer -->
<footer class="bg-gradient-dark text-white py-5 mt-5" style="background: linear-gradient(to right, #000000, #1c1c1c);">
  <div class="container text-center">
    <h5 class="fw-bold mb-3" style="letter-spacing: 1px;">Immo</h5>
    <p class="mb-4">&copy; 2025 Immo. Tous droits réservés.</p>
    <div>
      <a href="#" class="text-white mx-3 social-icon"><i class="bi bi-facebook fs-4"></i></a>
      <a href="#" class="text-white mx-3 social-icon"><i class="bi bi-instagram fs-4"></i></a>
      <a href="#" class="text-white mx-3 social-icon"><i class="bi bi-linkedin fs-4"></i></a>
    </div>
  </div>
</footer>

<!-- Optional custom CSS -->
<style>
  .social-icon:hover {
    color: #0d6efd;
    transform: scale(1.2);
    transition: all 0.3s ease;
  }
</style>


@endsection
