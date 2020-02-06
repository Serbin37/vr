@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            @foreach ($articles as $article)
            <h1>{!! $article->title !!}</h1>
            <p>{!! $article->description_short !!}</p>
            @endforeach
        </div>
    </div>
</div>


@endsection
