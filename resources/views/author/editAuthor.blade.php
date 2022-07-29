@extends('layouts.app')
@section('content')
    <div class="bg-light p-5 mt-4 rounded">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if (session()->has('success'))
            <div class="alert alert-success">
              <h3>{{session()->get('success')}}<h3/>
            </div>
        @endif
        <form class="w-50" action="{{route('authors.update',['author'=>$author->id])}}"  method="post">
            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="mb-3">
                <label for="fname" class="form-label">First name</label>
                <input type="text" class="form-control" name="first_name" value="{{$author->first_name}}">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="last_name" value="{{$author->last_name}}">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit">edit</button>
            </div>
       
        </form>
    </div>
    
@endsection