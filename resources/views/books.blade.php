@extends ('layouts.head')
@section ('content')

    <h1>All books</h1>
    @if(session('success'))
        <div class="alert alert-success" >
            {{ session('success') }}
        </div>
    @endif
    @foreach($books as $book)
    <div>
        <strong>Book Title:</strong>{{ $book->title }}
        <strong>Book Author:</strong>{{ $book->author }}
        <strong>Book Edition:</strong>{{ $book->edition }}
        <strong>Book College:</strong>{{ $book->college }}
        <strong>Book Copies:</strong>{{ $book->copies }}
        <a href="{{ route('book.show',['id'=> $book->id]) }}">Book details</a>
    </div>
    @endforeach

@endsection
