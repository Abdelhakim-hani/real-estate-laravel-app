@extends('layout.layout')

@section('title', 'Nos Services')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Services Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" style="color: #0d9488;">Nos Services</h2>

    <div class="row g-4">
      <!-- Service 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
          <div class="mb-3">
            <i class="bi bi-house-door-fill fs-1 text-teal"></i>
          </div>
          <h5 class="fw-semibold mb-2">Vente de biens immobiliers</h5>
          <p class="text-muted">Nous vous aidons à vendre vos biens rapidement avec une visibilité maximale et un accompagnement personnalisé.</p>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
          <div class="mb-3">
            <i class="bi bi-search-heart-fill fs-1 text-teal"></i>
          </div>
          <h5 class="fw-semibold mb-2">Recherche de propriété</h5>
          <p class="text-muted">Trouvez la maison ou l'appartement idéal grâce à notre vaste base de données et notre réseau de partenaires.</p>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
          <div class="mb-3">
            <i class="bi bi-cash-stack fs-1 text-teal"></i>
          </div>
          <h5 class="fw-semibold mb-2">Estimation gratuite</h5>
          <p class="text-muted">Recevez une estimation professionnelle et gratuite de la valeur de votre bien immobilier.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="{{ route('contact') }}" class="btn btn-teal px-4 py-2 rounded-pill shadow">Demander un service</a>
    </div>
  </div>
</section>
@endsection
