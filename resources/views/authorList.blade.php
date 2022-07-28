@extends('layouts.app')
@section('content')
    
    <div class="bg-light p-5 rounded">
        <h1>Authors list</h1>
        <div class="d-flex justify-content-end mb-4">
            <a href="http://" class="btn btn-info">add</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                        
                    
                    <tr>
                        <td>{{$author->id}}</td>
                        <td>{{$author->first_name}}</td>
                        <td>{{$author->last_name}}</td>
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