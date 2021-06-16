@extends('layout')
@section('main')
    <h4>All articles</h4>
    @foreach($articles as $article)
        <h3>{{$article->title}}</h3>
        <p>
            {{$article->body}}
        </p>
    @endforeach
    <div class="pagination pagination-sm">
        {{$articles->links()}}
    </div>

@endsection
