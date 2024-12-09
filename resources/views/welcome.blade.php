<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="display-4">Hello, bienvenue sur notre site!</h1>

        <!-- Boutons de connexion et d'inscription -->
        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-2">Se connecter</a>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg mx-2">S'inscrire</a>
        </div>
    </div>

    <!-- Bootstrap JS (optionnel si tu veux des fonctionnalités interactives) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
