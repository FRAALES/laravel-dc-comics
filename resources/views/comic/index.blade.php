@extends("layouts.main-layout")

@section('title')
    Index
@endsection

@section ("content")
<div class="text-center">
    <h1>Comics</h1>
    <a href="{{ route('comic.create') }}">CREATE NEW COMIC</a>
    <br>
    <br>
    <br>
    <ul class="list-unstyled">
        @foreach ($comics as $comic)
        <li>
            <a href="{{ route('comic.show', $comic -> id) }}" class="text-decoration-none">
                {{$comic -> title}}
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection