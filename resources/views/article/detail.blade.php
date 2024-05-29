<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD D'ARTICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Détails de l'article N°{{$article->id}}</h1>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 20rem;height:1000px">
            <img src="{{ $article->image }}" class="card-img-top" alt="..." width="20rem" height="200px">
            <div class="card-body">
              <h5 class="card-title"><strong>Nom: {{ $article->nom }}</h5>
              <p> <strong>Description : {{ $article->description}}</strong> </p>
              <p><strong> Date de la création : {{$article->date_creation}}</strong></p>
              <p class="d-inline-flex gap-3">
                <a href="/modifier-article/{{ $article->id }}" class="btn btn-outline-primary btn-sm">Modifier</a>
                <a href="/supprimer-article/{{ $article->id }}" class="btn btn-outline-danger btn-sm">Supprimer</a>
              </p>
              <a href="/article" class="btn btn-outline-success btn-sm">Revenir à la liste des articles</a>
            </div>
            </div>
            <h1>LISTE DES COMMENTAIRES</h1>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>