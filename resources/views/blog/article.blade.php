@extends('layouts.app')

@section('title'){{$article->meta_title}}@endsection
@section('meta_keyword'){{$article->meta_keyword}}@endsection
@section('meta_description'){{$article->meta_description}}@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$article->title}}</h1>
                <p>{!!$article->description!!}</p>
            </div>
        </div>
    </div>
@endsection