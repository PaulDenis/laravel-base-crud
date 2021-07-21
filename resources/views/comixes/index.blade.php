    @extends('layout.main')

    @section('content')
        @if (session('deleted'))
            <div class="alert alert-success">
                {{ session('deleted') }}
            </div>
        @endif
        <h1>Our Comics:</h1>
        <div class="my_container">
            @foreach ($comixes as $item)
                <div class="comics">
                    <img src="{{ $item->thumb }}" alt="Comic image">
                    <h3>{{ $item->title }}</h3>
                    <h4>Serie: {{ $item->series }}</h4>
                    <h4>Cost: {{ $item->price }}&euro;</h4>
                    <a href="{{ route("comixes.show", $item->id) }}" class="btn btn-success mt-4">
                        SHOW
                    </a>
                    <form 
                        class="mt-4"
                        action="{{ route('comixes.destroy', $item->id) }}" 
                        method="POST"
                        onSubmit = "return confirm('Are you sure you want to delete the comic {{ $item->title }}?')"
                        >
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="DELETE">
                    </form>
                </div>
            @endforeach
        </div>

        {{ $comixes->links() }}
        @endsection