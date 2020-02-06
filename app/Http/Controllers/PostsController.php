<?php

namespace App\Http\Controllers;

use App\Post;
use App\Article;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function article(){
        $articles = Article::all();
        return view('blog.home')->with('articles', $articles);
    }
}
