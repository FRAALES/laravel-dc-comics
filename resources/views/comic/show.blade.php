@extends("layouts.main-layout")

@section('title')
    Show
@endsection

@section ("content")
<div class="text-center">
    <h1> {{ $comic -> title }}</h1>
    <h2> {{ $comic -> description }}</h2>
    <h3> {{ $comic -> price}}</h3>
    <h4> {{ $comic -> series }}</h4>
    <h5> {{ $comic -> sale_date }}</h5>
    <p>{{ $comic -> type}}</p>
    <br>
    <br>
    <br>
    <br>
    <button>
        <a href="{{ route('comic.index')}}" class="text-decoration-none">
            Torna all'Index
        </a>
    </button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>    
</div>
@endsection