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

Route::get('/ajouter', [ArticleController::class, 'AjouterArticle']);
Route::post('/ajouter/traitement', [ArticleController::class, 'AjouterArticleTraitement']);

Route::get('/modifier-article/{id}', [ArticleController::class, 'ModifierArticle']);
Route::post('/modifier/traitement', [ArticleController::class, 'ModifierArticleTraitement']);

Route::get('/supprimer-article/{id}', [ArticleController::class, 'supprimer_article']);

Route::get('/detail-article/{id}', [ArticleController::class, 'DetailArticle']);
                   
                                 /*CRUD COMMENTAIRE*/
Route::get('/commentaire', [CommentaireController::class, 'ListeCommentaire']);
