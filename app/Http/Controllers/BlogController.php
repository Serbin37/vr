<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use App\Page;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slug) {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->first();
        $pages = Page::all();
        return view('blog.category', [
            'category' => $category,
            'categories' => $categories,
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
//        $pages = Page::all();
//        $category = Category::all();
//        return view('blog.pages', [
//            'pages' => $pages,
//            'categories' => $category,
//            'page' => Page::all('slug', $slug)->first(),
//        ]);
//        $pages = Page::all();
//        $category = Category::all();
//        return view('blog.pages', [
//            'pages' => $pages,
//            'categories' => $category,
//            'article' => Article::where('slug', $slug)->first()
//        ]);

        $pages = Page::all();
        $page = Page::ofSlug($slug)->first(); // поиск страницы по slug
        return view('blog.pages', compact(['page']),[
            'pages' => $pages,
            'page' => $page,
        ]);
    }
}
