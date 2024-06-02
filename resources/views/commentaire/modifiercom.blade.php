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
            <h1>MODIFIER UN COMMENTAIRE</h1>
            <hr>
            <form action="/modifier/commentaire-traitement" method="POST" class="form-group">
                 @csrf
                <div class="form-group">
                    <input type="text" name="id" style="display: none" value="{{$commentaires->id}}">
                    <input type="hidden" name="article_id" value="{{$commentaires->article_id}}">
                    <label for="nom_complet_auteur">Présentez-vous!!!</label>
                    <input type="text" class="form-control" id="nom_complet_auteur" name="nom_complet_auteur" value="{{$commentaires->nom_complet_auteur}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="contenu">Que dites-vous maintenant???</label>
                    <textarea class="form-control" id="contenu" name="contenu">{{$commentaires->contenu}}</textarea>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn sm">Modifier</button>
            </form>
        </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>