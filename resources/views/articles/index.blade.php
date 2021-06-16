@extends('layouts.app')
@section('main')
    <h4>All articles</h4>
    @foreach($articles as $article)
{{--        @can('view',$articles)--}}
            <h3>{{$article->title}}</h3>
            <p>
                {{$article->body}}
            </p>
{{--        @endcan--}}
    @endforeach
@endsection
