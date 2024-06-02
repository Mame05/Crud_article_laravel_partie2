<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
                                 /* CRUD ARTICLE*/
Route::get('/article', [ArticleController::class, 'ListeArticle']);

Route::get('article/ajouter', [ArticleController::class, 'AjouterArticle']);
Route::post('/ajouter/article-traitement', [ArticleController::class, 'AjouterArticleTraitement']);

Route::get('/modifier-article/{id}', [ArticleController::class, 'ModifierArticle']);
Route::post('/modifier/article-traitement', [ArticleController::class, 'ModifierArticleTraitement']);

Route::get('/supprimer-article/{id}', [ArticleController::class, 'SupprimerArticle']);

Route::get('/detail-article/{id}', [ArticleController::class, 'DetailArticle']);
                   
                                 /*CRUD COMMENTAIRE*/

Route::post('/ajouter/commentaire-traitement', [CommentaireController::class, 'AjouterCommentaireTraitement']);
/*On met le formulaire d'ajout de commentaire dans la vue détail c'est la raisou pour laquelle on a pas définie une route pour ajouter un commentaire mais si c'était le cas contraire on allait crée une route qui nous ménera vers cet formulaire*/

Route::get('/modifier-commentaire/{id}', [CommentaireController::class, 'ModifierCommentaire']);
Route::post('/modifier/commentaire-traitement', [CommentaireController::class, 'ModifierCommentaireTraitement']);

/*Route::get('/supprimer-commentaire/{id}', [CommentaireController::class, 'SupprimerCommentaire']);*/
