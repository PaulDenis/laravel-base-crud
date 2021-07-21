@extends('layout.main')

@section('content')

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
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
    <a href="{{ route("comixes.edit", $comix->id)}}" class="btn btn-primary">
        Edit
    </a>
@endsection