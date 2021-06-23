@extends('layouts.main')

@section('content')

    <main class="home">
    
        <div class="container">

            @foreach($movies as $element)
        
                <div class="card-movie">

                    <h3>{{$element['title']}}</h3> 

                    <h4>DATA: {{$element['date']}}</h4>

                    <h4>VOTO: {{$element['vote']}}</h4>
                
                </div>

            @endforeach
        
        </div>
    
    </main>

@endsection
