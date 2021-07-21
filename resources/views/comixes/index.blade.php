    @extends('layout.main')

    @section('content')
        <h1>Our Comics:</h1>
        <div class="my_container">
            @foreach ($comixes as $item)
                <div class="comics">
                    <img src="{{ $item->thumb }}" alt="Comic image">
                    <h3>{{ $item->title }}</h3>
                    <h4>Serie: {{ $item->series }}</h4>
                    <h4>Cost: {{ $item->price }}&euro;</h4>
                </div>
            @endforeach
        </div>

        {{ $comixes->links() }}
        @endsection