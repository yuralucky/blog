@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update new Article</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('articles.update',$article->id) }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$article->user_id}}">
                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="password" type="text"
                                           class="form-control " name="title" value="{{$article->title}}"
                                    >

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-md-4 col-form-label text-md-right">Body</label>

                                <div class="col-md-6">
                                    <textarea  type="text" class="form-control " name="body">{{$article->body}}</textarea>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="visible">Visible for all users</label>
                                <div class="col-md-3">
                                    <input id="visible" class="form-check-input " type="checkbox" name="is_visible" value="1">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-large">
                                        Update article
                                    </button>

                                </div>
                            </div>
                        </form>
                        <a href="{{route('articles.destroy',$article->id)}}" class="btn btn-danger btn-block">Delete article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
