@extends("layouts.main-layout")

@section ("content")
<div class="text-center">
    <h1>Comics</h1>
    <ul>
        @foreach ($comics as $comic)
        <li>
            {{$comic -> title}}
        </li>
        @endforeach
    </ul>
</div>
@endsection