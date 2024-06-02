<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentaireController extends Controller
{
   /* public function ListeCommentaire(){
        $commentaires = Commentaire::all();
        return view('article/detail', compact('commentaires'));
    }*/

   /* public function AjouterCommentaire(){
        return view('article/detail');
       }*/
    
       public function AjouterCommentaireTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate(["
            'nom_complet_auteur' => 'required|max:15'
            'contenu' => 'required|max:255'
            'article_id'=>'required|exists:articles,id'
            
        "]);
        /*sur les validations, on a fixé que les caractères pour le nom complet ne dépasse pas 15, les caractères pour le contenu ne dépasse pas 255 et l'id de l'article doit exister dans la base pour que le commentaire puisse effectuer*/
    
        $commentaire= new Commentaire();
        $commentaire->article_id = $request->article_id;
        $commentaire->nom_complet_auteur = $request->nom_complet_auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->save();
        return redirect()->back();
       }

       public function ModifierCommentaire($id){
        
        $commentaires = Commentaire::find($id);
        /*$article = DB::table('articles')->where('id', $id)->get();*/
        return view('commentaire/modifiercom', compact('commentaires'));
    }

       public function ModifierCommentaireTraitement(Request $request){
        /*dd($request->all());*/
        $article = Article::find($request->article_id); /*cela permet que lorsqu'on fera la redirection vers la page détail du méme article*/
        $request->validate(["
        'nom_complet_auteur' => 'required|max:15'
        'contenu' => 'required|max:255'
        'article_id'=>'required|exists:articles,id'
        "]);
        $commentaire = Commentaire::findOrFail($request->id);
        $commentaire->article_id = $request->article_id;
        $commentaire->nom_complet_auteur = $request->nom_complet_auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->update();
        return view('article/detail', compact('article'));
        /*return redirect()->back(); */     
       }

       public function SupprimerCommentaire($id){
        $commentaire = Commentaire::find($id);
        $commentaire->delete();
        return redirect()->back();
       }
}