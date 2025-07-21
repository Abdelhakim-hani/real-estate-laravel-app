@extends('layout.layout')

@section('title', "$property->title | IZ")

@section('content')

<style>
  .carousel-image {
    transition: transform 0.7s ease-in-out, filter 0.4s ease;
    border-radius: 1rem;
  }

  .carousel-image:hover {
    transform: scale(1.05);
    filter: brightness(90%);
  }

  .carousel-caption {
    bottom: 20px;
    left: 20px;
    right: auto;
    text-align: left;
  }

  .card-box {
    background-color: #f8f9fa;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
  }
</style>

<div class="container py-5">
  <div class="row g-5">
    <!-- Carousel Section -->
    <div class="col-md-8">
      <div id="carouselExampleAutoplaying" class="carousel slide rounded-4 shadow-lg overflow-hidden position-relative" data-bs-ride="carousel">
        <div class="carousel-inner">
          @forelse ($property->pictures()->get() as $key => $picture)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
              <div class="position-relative overflow-hidden" style="height: 500px;">
                <img src="{{ Storage::url($picture->path) }}" class="d-block w-100 h-100 object-fit-cover carousel-image" alt="{{ $property->title }}">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                  <h5 class="text-white fw-bold">{{ $property->title }}</h5>
                </div>
              </div>
            </div>
          @empty
            <div class="carousel-item active">
              <div class="position-relative overflow-hidden" style="height: 500px;">
                <img src="{{ asset('storage/images/mellish.jpg') }}" class="d-block w-100 h-100 object-fit-cover carousel-image" alt="Default image">
              </div>
            </div>
          @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
    </div>

    <!-- Property Details & Contact -->
    <div class="col-md-4">
      <div class="card-box">
        <h2 class="mb-2">{{ $property->title }}</h2>
        <h5 class="text-muted mb-3">{{ $property->surface }} m² • {{ $property->rooms }} pièces</h5>
        <div class="text-success fw-bold fs-3 mb-3">{{ number_format($property->price, 2, '.', ' ') }} DH</div>

        <hr>

        <h5 class="mb-3">Intéressé par ce bien ?</h5>
        @if (session('success'))
          <x-alert>{{ session('success') }}</x-alert>
        @endif

        <form class="vstack gap-3" action="{{ route('property.contact', $property) }}" method="POST">
          @csrf
          <div class="row g-2">
            <x-input class="col" label="Prénom" name="firstname" placeholder="Votre prénom" />
            <x-input class="col" label="Nom" name="lastname" placeholder="Votre nom" />
          </div>
          <div class="row g-2">
            <x-input class="col" label="Téléphone" name="phone" placeholder="Votre téléphone" />
            <x-input class="col" type="email" label="Email" name="email" placeholder="Votre email" />
          </div>
          <x-input type="textarea" label="Votre message" name="message" />
          <button class="btn btn-primary w-100">Envoyer</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Description and Features -->
  <div class="mt-5">
    <h3 class="mb-3">Description</h3>
    <p class="text-muted">{!! nl2br(e($property->description)) !!}</p>

    <div class="row mt-4 g-4">
      <!-- Caractéristiques -->
      <div class="col-md-8">
        <div class="bg-white shadow-sm rounded p-4">
          <h4 class="mb-3">Caractéristiques</h4>
          <table class="table table-striped">
            <tr><td>Surface</td><td>{{ $property->surface }} m²</td></tr>
            <tr><td>Pièces</td><td>{{ $property->rooms }}</td></tr>
            <tr><td>Chambres</td><td>{{ $property->bedrooms }}</td></tr>
            <tr><td>Étage</td><td>{{ $property->floor ?: 'Rez-de-chaussée' }}</td></tr>
            <tr><td>Adresse</td><td>{{ $property->address }}, {{ $property->city }} ({{ $property->postal_code }})</td></tr>
          </table>
        </div>
      </div>

      <!-- Spécificités -->
      <div class="col-md-4">
        <div class="bg-white shadow-sm rounded p-4">
          <h4 class="mb-3">Spécificités</h4>
          @forelse ($property->options as $option)
            <li class="list-group-item border-0 ps-0">{{ $option->name }}</li>
          @empty
            <p class="text-secondary text-center">Aucune spécificité</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
