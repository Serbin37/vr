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
        return view('blog.home', [
            'articles' => Article::orderBy('created_at', 'desc')->paginate(10),
            'categories' => Category::all(),
            'pages' => Page::all(),
        ]);
    }

}
