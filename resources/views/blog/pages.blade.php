@extends('layouts.app')

@section('title'){{$page->meta_title}}@endsection
@section('meta_keyword'){{$page->meta_keyword}}@endsection
@section('meta_description'){{$page->meta_description}}@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$page->title}}</h1>
                <p>{!!$page->description!!}</p>
            </div>
        </div>
    </div>
@endsection