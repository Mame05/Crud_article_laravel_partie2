<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ListeArticle(){
        return view('article/liste');
    }
}
