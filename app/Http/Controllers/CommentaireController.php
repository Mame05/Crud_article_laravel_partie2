<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /*public function ListeCommentaire(){
        $articles = Commentaire::all();
        return view('article/detail', compact('commentaires'));
    }*/

   /* public function AjouterCommentaire(){
        return view('article/detail');
       }*/
    
       public function AjouterCommentaireTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate(["
            'nom_complet_auteur' => 'required'
            'contenu' => 'required'
            'article_id'=>'required'
            
        "]);
    
        $commentaire= new Commentaire();
        $commentaire->article_id = $request->input('article_id');
        $commentaire->nom_complet_auteur = $request->nom_complet_auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->save();
    
        return redirect('/detail-article/{id}')->with('status', "Le commentaire a bien été ajouté avec succés.");
       }
}