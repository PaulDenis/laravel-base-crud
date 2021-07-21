@extends('layout.main')

@section('content')
    <div class="show">
        <img src="{{ $comix->thumb }}" alt="Comic thumb">
        <div class="text">
            <h2>{{ $comix->title }}</h2>
            <p>{{ $comix->description }}</p>
            <h2>{{ $comix->series }}</h2>
            <h2>Price: {{ $comix->price }} &euro;</h2>
            <h2>Sale date: {{ $comix->sale_date }}</h2>
        </div>
    </div>

    <a href="{{ route("comixes.index")}}" class="btn btn-success">
        Return to menu
    </a>
@endsection