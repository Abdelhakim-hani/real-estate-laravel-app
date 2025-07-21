<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - Immo</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      background: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .auth-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }
    .auth-card {
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      padding: 2.5rem;
      width: 100%;
      max-width: 400px;
    }
    .auth-title {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      text-align: center;
      color: #2c3e50;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>
  <div class="auth-container">
    <div class="auth-card">
      <form method="POST" action="" class="vstack gap-3">
        <h1 class="auth-title">Se connecter à Immo</h1>

        @if (session('error'))
          <x-alert type="danger">{{ session('error') }}</x-alert>
        @endif
        @if (session('success'))
          <x-alert>{{ session('success') }}</x-alert>
        @endif

        @csrf

        <x-input class="form-control" name="email" placeholder="Adresse email" />
        <x-input class="form-control" name="password" label="Mot de passe" placeholder="Votre mot de passe" type="password" />
        <x-checkbox name="remember" label="Se souvenir de moi" />

        <div class="d-grid mt-3">
          <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
        <div class="text-center mt-3">
          <a href="#" class="text-decoration-none text-muted small">Mot de passe oublié ?</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
