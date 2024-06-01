<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD D'ARTICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1 class="text-center">Détails de l'article N°{{$article->id}}</h1>
            <div class="card" style="width: 70rem">
              <img src="{{ $article->image }}" class="card-img-top" alt="...">
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
              <div >
                <h1>LISTE DES COMMENTAIRES</h1>
                <form action="/ajouter/commentaire-traitement" method="POST" class="form-group">
                  @csrf
                  <div class="form-group">
                    <label for="nom_complet_auteur">Présentez-vous</label>
                    <input type="text" class="form-control" id="nom_complet_auteur" name="nom_complet_auteur">
                  </div>
                  <div class="form-group">
                    <label for="contenu">Votre commentaire</label>
                    <textarea class="form-control" id="contenu" name="contenu"></textarea>
                  </div>
                <br>
                  <button type="submit" class="btn btn-primary btn sm">Envoyer</button>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>