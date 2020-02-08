<?php

namespace App\Http\Controllers;

use App\Page;
use App\Article;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function article(){
        $articles = Article::all();
        $categories = Category::all();
        $pages = Page::all();
        return view('blog.home', [
            'articles' => $articles,
            'categories' => $categories,
            'pages' => $pages
        ]);
    }

}
