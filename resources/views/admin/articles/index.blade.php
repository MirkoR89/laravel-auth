@extends('layouts.dashboard')

@section('content')
    <h1>All articles for the admin</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)    
                <tr>
                    <td scope="row">{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->slug }}</td>
                    <td>
                        <a href="{{ route('admin.articles.show', ['article'=>$article->id]) }}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                        <a href="{{ route('admin.articles.edit', ['article'=>$article->id]) }}" class="btn btn-success"><i class="fas fa-pencil-ruler fa-sx fa-fw"></i></a>
                        <a href="#" class="btn btn-danger"> <i class="fas fa-trash fa-xs fa-fw"></i></a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection