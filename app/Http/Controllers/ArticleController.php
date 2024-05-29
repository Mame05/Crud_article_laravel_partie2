<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ListeArticle(){
        $articles = Article::all();
        return view('article/liste', compact('articles'));
    }

    public function AjouterArticle(){
        return view('article/ajouter');
       }
    
       public function AjouterArticleTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate(["
            'nom' => 'required'
            'description' => 'required'
            'date_creation' => 'required'
            'image' => 'required'
        "]);
    
        $article= new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_creation = $request->date_creation;
        $article->image = $request->input('image');/*Assure l'affichage de l'image via l'url*/
        $article->save();
    
        return redirect('/article')->with('status', "L'article a bien été ajouté avec succés.");
       }

       public function ModifierArticle($id){
        $articles = Article::find($id);
        return view('article/modifier', compact('articles'));
       }
    
       public function ModifierArticleTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate(["
        'nom' => 'required'
        'description' => 'required'
        'date_creation' => 'required'
        'image' => 'required'
        "]);
        $article=  Article::find($request->id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_creation = $request->date_creation; 
        $article->image = $request->input('image');
        $article->update();
        
        return redirect('article')->with('status', "L'article a bien été modifié avec succés.");
       }
}
