@extends('layouts.main-layout')
@section('contain')
    <main>
        <h1>{{$movie -> title}}</h1>

         <p> {{$movie -> original_title}}</p>  
         <p>{{ $movie -> date}}</p>
         <p>{{ $movie -> nationality}}</p>
         <p>{{ $movie -> vote}}</p>
  
           

    </main>
    
    
    

@endsection