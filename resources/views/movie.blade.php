@extends('layouts.base')

@section('content')
        <p>Title: {{$movie->title}}</p>
        <p>Genre: {{$movie->genre}}</p>
        <p>Rating: {{$movie->rating}}</p>
       <p><a href="{{$edit_link}}" target="_blank">Edit</p>

@endsection
