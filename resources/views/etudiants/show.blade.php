<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'Étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #581919;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-right: 10px;
            margin-top: 10px;
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 3px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    @auth
    <p>Welcome, {{ Auth::user()->name }}</p>
    @endauth
    <p> <a href="{{ route('logout') }}">Logout</a> </p>
    <h1>Détails de l'Étudiant</h1>
    <p><strong>Nom:</strong> {{ $etudiant->nom }}</p>
    <p><strong>Prénom:</strong> {{ $etudiant->prenom }}</p>
    <p><strong>Sexe:</strong> {{ $etudiant->sexe }}</p>
    <p><strong>Filière:</strong> {{ $etudiant->filiere->nom }}</p>
    
    <a href="{{ route('etudiants.index') }}">Retour à la liste des Étudiants</a>

    <a href="{{ route('etudiants.edit', $etudiant->id) }}">Modifier</a>
    <a href="{{ route('etudiants.destroy', $etudiant->id) }}">Supprimer</a>
   
</body>
</html>
