@extends('layouts.app')
@section('content')
    <div class="bg-light p-5 mt-4 rounded">
        <form class="w-50" action="{{route('books.store')}}"  method="post">
            @csrf
            <div class="mb-3">
                <label for="fname" class="form-label">Title</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Description</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit">add</button>
            </div>
       
        </form>
    </div>
    
@endsection