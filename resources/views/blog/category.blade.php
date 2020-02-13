@extends('layouts.app')

@section('title'){{$category->title}}@endsection

@section('content')
    {{--    <div class="container">--}}
    {{--        @forelse ($articles as $article)--}}
    {{--            <div class="row">--}}
    {{--                <div class="sol-sm-12">--}}
    {{--                    <h2><a href="{{route('article', $article->slug)}}">{{$article->title}}</a></h2>--}}
    {{--                    <p>{!! $article->description_short !!}</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        @empty--}}
    {{--            <h2 class="text-center">Пусто</h2>--}}
    {{--        @endforelse--}}
    {{--        {{$articles->links()}}--}}
    {{--    </div>--}}
    <div class="blog">
        <div class="container">
            <h1 class="text-center">Blog</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="row ">
                        @foreach($articles as $article)
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{$article->image}}" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-body_created_at">{{$article->created_at}}</p>
                                        <h2 class="card-title">
                                            <a class="card-link" href="{{route('article', $article->slug)}}">
                                                {{$article->title}}
                                            </a>
                                        </h2>
                                        <span class="card-text">
                                        <a href="{{route('article', $article->slug)}}">{!! $article->description_short !!}</a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{$articles->links()}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="categories">
                        <h4 class="categories-title">Категории</h4>
                        <ul>
                            @foreach ($categories as $category)
                                <li class="categories-item">
                                    <a href="{{route('category', $category->slug)}}">{{$category->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
