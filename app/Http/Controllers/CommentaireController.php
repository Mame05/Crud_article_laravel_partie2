<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function ListeCommentaire(){
        return view('commentaire/liste');
}
}