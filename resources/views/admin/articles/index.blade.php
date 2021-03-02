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
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->slug }}</td>
                    <td>
                        <a href="{{ route('admin.articles.show', ['article'=>$article->slug]) }}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                        <a href="{{ route('admin.articles.edit', ['article'=>$article->slug]) }}" class="btn btn-success"><i class="fas fa-pencil-ruler fa-sx fa-fw"></i></a>    

                        <form action="{{ route('admin.articles.destroy', ['article'=>$article->slug]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-1"><i class="fas fa-trash fa-xs fa-fw"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection