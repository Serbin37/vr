@extends('layouts.app')

@section('title'){{$page->meta_title or ""}}@endsection
@section('meta_keyword'){{$page->meta_keyword or ""}}@endsection
@section('meta_description'){{$page->meta_description or ""}}@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$page->title or ""}}</h1>
{{--                <p>{!!$page->description!!}</p>--}}

            </div>

        </div>
    </div>
@endsection
