@extends('layout.main')

@section('content')
<h2>Modify the comic {{$comix->title}}:</h2>
<a href="{{ route('comixes.show', $comix->id) }}" class="btn btn-primary">Back</a>

<form action="{{ route('comixes.update', $comix->id) }}" method="POST">
    @csrf
    @method("PATCH")

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Insert the title here" name="title" value="{{ $comix->title }}">
    </div>
    <div class="form-group">
        <label for="series">Series:</label>
        <input type="text" class="form-control" id="series" placeholder="Insert the series here" name="series" value="{{ $comix->series }}">
    </div>
    <div class="form-group">
        <label for="type">Type (es:comic book):</label>
        <input type="text" class="form-control" id="type" placeholder="Insert the type here" name="type" value="{{ $comix->type }}">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" step="0.01" class="form-control" id="price" placeholder="Insert the price here" name="price" value="{{ $comix->price }}">
    </div>
    <div class="form-group">
        <label for="sale_date">Sale date:</label>
        <input type="text" class="form-control" id="sale_date" placeholder="Insert the sale date here" name="sale_date" value="{{ $comix->sale_date }}">
    </div>
    <div class="form-group">
        <label for="thumb">Cover:</label>
        <input type="text" class="form-control" id="thumb" placeholder="Insert the thumb here" name="thumb" value="{{ $comix->thumb }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" placeholder="Insert the description here" rows="4">{{ $comix->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    
</form>
@endsection