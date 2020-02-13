@extends('layouts.app')

@section('title'){{$article->meta_title}}@endsection
@section('meta_keyword'){{$article->meta_keyword}}@endsection
@section('meta_description'){{$article->meta_description}}@endsection

@section('content')
    <div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>{{$article->title}}</h1>
                <p>{!!$article->description!!}</p>
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
