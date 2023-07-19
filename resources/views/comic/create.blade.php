@extends("layouts.main-layout")

@section('title')
    Create
@endsection

@section("content")
    <div class="text-center">
        <h1>
            New Comic
        </h1>
        <form method="POST" action="{{ route('comic.store') }}">

            @csrf


            <label for="title">Title</label>
            <br>
            <input type="text" name="title">
            <br>

            <label for="description">Description</label>
            <br>
            <input type="text" name="description">
            <br>
            
            <label for="price">Price</label>
            <br>
            <input type="text" name="price">
            <br>

            <label for="series">Series</label>
            <br>
            <input type="text" name="series">
            <br>

            <label for="sale_date">Sale</label>
            <br>
            <input type="text" name="sale_date">
            <br>

            <label for="type">Type</label>
            <br>
            <input type="text" name="type">
            <br>
            <br>
            <br>

            <input type="submit" value="CREATE">
            <br>
            <br>
            <br>

        </form>

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
    </div>
@endsection