@extends('layouts.app')
@section('content')
    
    <div class="bg-light p-5 rounded">
        <h1>Authors list</h1>
        <div class="d-flex justify-content-between mb-2">
            {{$result->links()}}

        </div>

        @if (session()->has('successDelete'))
            <div class="alert alert-success">
                <h3>{{session()->get('successDelete')}}<h3/>
            </div>
        @endif

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
                @foreach ($result as $author)
                        
                    
                    <tr>
                        <td>{{$author->id}}</td>
                        <td>{{$author->first_name}}</td>
                        <td>{{$author->last_name}}</td>
                        <td>
                            <a href="{{route('authors.edit',['author'=>$author->id])}}" class="btn btn-info">edit</a>


                            <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet auteur?')){
                                document.getElementById('form-{{$author->id}}').submit();
                            }">delete</a>

                            <form id="form-{{$author->id}}" action="{{route('authors.destroy',['author'=>$author->id])}}" method="post">
                                @csrf
                                {{-- "_method" permet à laravel de comprendre qu'on utilise une methode delete et au niveau de value dans l'input on met delete ou put  --}}
                                <input type="hidden" name="_method" value="delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>

    </div>

@endsection