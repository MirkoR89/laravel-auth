@extends('layouts.dashboard')

@section('content')
<h1>Edit {{$article->title}}</h1>
    
<form action="{{ route('admin.articles.update', ['article'=>$article->slug]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <h4><label for="title">Title</label></h4>
        <input type="text" name="title" id="title" value="{{$article->title}}">
    </div>

    <div class="form-group">
        <h4><label for="body">Body</label></h4>
        <textarea name="body" id="body" cols="100" rows="10">{{$article->body}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection