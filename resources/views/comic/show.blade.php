@extends("layouts.main-layout")

@section ("content")
<div class="text-center">
    <h1> {{ $comic -> title }}</h1>
    <h2> {{ $comic -> description }}</h2>
    <h3> {{ $comic -> price}}</h3>
    <h4> {{ $comic -> series }}</h4>
    <h5> {{ $comic -> sale_date }}</h5>
    <p>{{ $comic -> type}}</p>

    
</div>
@endsection



