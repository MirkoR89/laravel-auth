@extends('layouts.app')

@section('content')
    <h1>Blog</h1>
    
    @foreach ($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">{{$article->title}}</h4>
                <p class="card-text">{{$article->body}}</p>
            </div>
        </div>
    @endforeach
@endsection