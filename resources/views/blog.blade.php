@extends('layout.layout')

@section('title', 'Blog')

@section('content')
<!-- Blog Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" style="color: #0d9488;">Notre Blog</h2>

    <div class="row g-4">
      <!-- Blog Post 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="{{ asset('https://myramar.com/wp-content/uploads/2025/01/tendencias-inmobiliarias-2025-foto-1.jpg') }}" class="card-img-top" alt="Blog 1">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Les tendances du marché immobilier 2025</h5>
            <p class="card-text text-muted">Découvrez les dernières évolutions du marché immobilier et nos conseils pour bien investir.</p>
            <a href="#" class="btn btn-outline-teal mt-2">Lire la suite</a>
          </div>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="{{ asset('https://www.hexagon.ma/wp-content/uploads/2022/06/Estimation-de-prix-de-vente-de-mon-appartement-villa-ou-terrain-au-Maroc.jpg') }}" class="card-img-top" alt="Blog 2">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Comment bien estimer son bien ?</h5>
            <p class="card-text text-muted">L’estimation juste est la clé d’une vente rapide. Voici nos méthodes professionnelles.</p>
            <a href="#" class="btn btn-outline-teal mt-2">Lire la suite</a>
          </div>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="{{ asset('https://relocation.ae/wp-content/uploads/2024/12/quartiers-a-dubai.png') }}" class="card-img-top" alt="Blog 3">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Top 5 des quartiers pour investir</h5>
            <p class="card-text text-muted">Notre sélection des meilleurs endroits pour faire fructifier votre investissement immobilier.</p>
            <a href="#" class="btn btn-outline-teal mt-2">Lire la suite</a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="{{ route('contact') }}" class="btn btn-teal px-4 py-2 rounded-pill shadow">Nous Contacter</a>
    </div>
  </div>
</section>
@endsection
