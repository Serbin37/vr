@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($articles as $article)
                <div class="col-sm-4">
                    <a href="{{route('article', $article->slug)}}"><h1>{!! $article->title !!}</h1></a>
                    <p>{!! $article->description_short !!}</p>
                </div>
            @endforeach
        </div>
        <div class="col-sm-4">
            @foreach ($categories as $category)
            <p><a href="{{route('category', $category->slug)}}">{{$category->title}}</a></p>
        @endforeach
        </div>
    </div>
</div>


@endsection
