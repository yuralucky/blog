@extends('layouts.app')
@section('main')
    <h4 class="mx-5">
        <a href="{{route('articles.create')}}">Create new Article</a></h4>
    @foreach($articles as $article)
        @can('view',$article)
            <h3><a href="{{route('articles.edit',$article->id)}}">{{$article->title}}</a></h3>
            <p>
                {{$article->body}}
            </p>
        @endcan
    @endforeach
@endsection
