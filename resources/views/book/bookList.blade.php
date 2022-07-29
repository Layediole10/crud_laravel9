@extends('layouts.app')
@section('content')
    
    <div class="bg-light p-5 rounded">
        <h1>Books list</h1>
        <div class="d-flex justify-content-end mb-4">
            <a href="books/create" class="btn btn-info">add a new book</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Id_author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookList as $book)
                        
                    
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{Str::limit($book->description), 30}}</td>
                        <td>{{$book->id_author}}</td>
                        <td>
                            <a href="http://" class="btn btn-info">edit</a>
                            <a href="http://" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection