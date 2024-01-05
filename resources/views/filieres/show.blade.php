<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails de la Filière</title>
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
    <h1>Détails de la Filière</h1>

    <p><strong>Nom:</strong> {{ $filieres->nom }}</p>

    <a href="{{ route('filiere.index') }}">Retour à la liste des Filières</a>
    <a href="{{ route('filiere.edit', $filieres->id) }}">Modifier</a>
    <a href="{{ route('filiere.destroy', $filieres->id) }}">Supprimer</a>
</body>
</html>
