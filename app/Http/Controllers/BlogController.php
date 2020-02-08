<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use App\Page;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slug) {
        $category = Category::where('slug', $slug)->first();
        $pages = Page::all();
        return view('blog.category', [
            'category' => $category,
            'pages' => $pages,
            'articles' => $category->articles()->where('published', 1)->paginate(12)
        ]);
    }
    public function article($slug) {
        $pages = Page::all();
        $category = Category::all();
        return view('blog.article', [
            'pages' => $pages,
            'categories' => $category,
            'article' => Article::where('slug', $slug)->first()
        ]);
    }
    public function page($slug) {
        $pages = Page::all();
        return view('blog.pages', [
            'pages' => $pages,
            'page' => Page::where('slug', $slug),
        ]);
    }
}
