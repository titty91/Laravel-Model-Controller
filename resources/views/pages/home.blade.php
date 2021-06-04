@extends('layouts.main-layout')
@section('contain')
    <main>
        <h1>list movies</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="{{route('movie', $movie -> id)}}">
                    {{$movie -> title}} </a>
                    <br>
     
                    <br>
                </li>
    
            @endforeach
    
        </ul>
    
    </main>
    
    
    

@endsection