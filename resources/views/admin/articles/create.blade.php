@extends('layouts.dashboard')

@section('content')
<h1>Write a new article</h1>

<form class="form-group" action="{{ route('admin.articles.store') }}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Your title is..">

    <label for="body" class="mt-3">Body</label>
    <textarea type="text" name="body" id="body" class="form-control" placeholder="Your body is.." rows="10"></textarea>
    <button type="submit" class="btn btn-success mt-4">Submit</button>
</form>
@endsection
