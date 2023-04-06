@extends ('layouts.head')
@section ('content')
    <form action="/books" method="POST">
        @csrf
        <label for="">Book title</label>
        <input type="text" name="title">
        <label for="">Book author</label>
        <input type="text" name="author">
        <label for="">Book edition</label>
        <input type="number" name="edition">
        <label for="">College</label>
        <input type="text" name="college">
        <label for="">Book copies</label>
        <input type="number" name="copies">
        <label for="">Category</label>
        <input type="text" name="category">
        <label for="">ISBN</label>
        <input type="text" name="ISBN">
        <button>Add Book</button>
    </form>

@endsection
