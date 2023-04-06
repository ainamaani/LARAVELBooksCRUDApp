@extends ('layouts.head')
@section ('content')

    <h1>All books</h1>
    @foreach($books as $book)
    <div>
        <strong>Book Title:</strong>{{ $book->title }}
        <strong>Book Author:</strong>{{ $book->author }}
        <strong>Book Edition:</strong>{{ $book->edition }}
        <strong>Book College:</strong>{{ $book->college }}
        <strong>Book Copies:</strong>{{ $book->copies }}
    </div>
    @endforeach

@endsection
