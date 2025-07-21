
<!-- In layout.blade.php head section -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

{{-- resources/views/auth/register.blade.php --}}
@extends('layout.layout')

@section('title', 'Créer un compte')

@section('content')
<style>
  .register-container {
    min-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to right, #e0f7fa, #ffffff);
    padding: 2rem;
  }

  .register-card {
    width: 100%;
    max-width: 500px;
    background: #fff;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }

  .form-icon-group {
    position: relative;
  }

  .form-icon-group .input-icon {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #0d9488;
    font-size: 1.2rem;
  }

  .form-icon-group input {
    padding-left: 2.5rem;
    height: 48px;
  }

  .btn-register {
    background-color: #0d9488;
    border: none;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  .btn-register:hover {
    background-color: #0f766e;
  }

  .form-label {
    font-weight: 600;
    color: #0d9488;
    margin-bottom: 0.3rem;
  }
</style>

<div class="register-container">
  <div class="register-card">
    <h3 class="text-center mb-4" style="color: #0d9488;">
      <i class="bi bi-person-plus-fill me-2"></i>Créer un compte
    </h3>
    
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Nom complet</label>
        <div class="form-icon-group">
          <i class="bi bi-person-fill input-icon"></i>
          <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <div class="form-icon-group">
          <i class="bi bi-envelope-fill input-icon"></i>
          <input type="email" name="email" class="form-control" placeholder="exemple@domaine.com" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <div class="form-icon-group">
          <i class="bi bi-lock-fill input-icon"></i>
          <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
        <div class="form-icon-group">
          <i class="bi bi-shield-lock-fill input-icon"></i>
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmation" required>
        </div>
      </div>

      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-register text-white py-2">
          <i class="bi bi-check-circle me-2"></i>S'inscrire
        </button>
      </div>

      <div class="text-center mt-3">
        <small>Déjà inscrit ? 
          <a href="{{ route('login') }}" style="color: #0d9488; text-decoration: none;">Connectez-vous</a>
        </small>
      </div>
    </form>
  </div>
</div>
@endsection
