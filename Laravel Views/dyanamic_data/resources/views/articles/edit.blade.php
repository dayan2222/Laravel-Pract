@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('wrapper')
<div id="wrapper">

    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>

        <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')
            
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                <input type="text" class="input" name="title" id="title" value="{{ $article->title}}">
                @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                @enderror 
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea type="text" class="input" name="excerpt" id="excerpt">{{ $article->excerpt}}</textarea>
                    @error('title')
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                @enderror 
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea type="text" class="input" name="body" id="body">{{ $article->body}}</textarea>
                    @error('title')
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                @enderror 
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>

    </div>


@endsection
