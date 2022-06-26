@extends('layout.layout')

@section('content')

<h1>Our Movies</h1>

@dump($movies);

@foreach($movies as $movie)
<ul>
    <li>{{$movie->title}}</li>
    <li>{{$movie->original_title}}</li>
    <li>{{$movie->title}}</li>
    <li>{{$movie->title}}</li>
    <li>{{$movie->title}}</li>
</ul>
@endforeach


@endsection
