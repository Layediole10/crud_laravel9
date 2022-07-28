@extends('layouts.app')
@section('content')
    <div class="bg-light p-5 rounded">
        <h1>{{$message}}</h1>
        <img src="{{asset('img/library.jpg')}}" alt="library">
    </div>

    
@endsection