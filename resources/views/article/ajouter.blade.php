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
                <h1>AJOUTER UN ARTICLE</h1>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}} 
                    </div>
                @endif
                <ul>
                    @foreach($errors->all() as $error)  <!--permet d'afficher les erreurs-->
                        <li class="alert alert-danger">{{$error}}   </li>
                    @endforeach
                </ul>

                <form action="/ajouter/traitement" method="POST" class="form-group">

                    @csrf
                    <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="date_creation">Date de la création</label>
                        <input type="date" class="form-control" id="date_creation" name="date_creation" >
                        <label for="image">Image illustratif</label>
                        <input type="text" class="form-control" id="image" name="image" >
                      </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn sm">AJOUTER UN ARTICLE</button>

                    <br> <br>

                    <a href="/article" class="btn btn-outline-primary btn sm">Revenir à la liste des articles</a>
                  </form>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>