@extends ('layouts.head')
@section ('content')
    <h3>{{$singlebook->title}}</h3>
    <h3>{{$singlebook->author}}</h3>
    <h3>{{$singlebook->edition}}</h3>
    <h3>{{$singlebook->college}}</h3>
    <h3>{{$singlebook->copies}}</h3>
    <form action="{{ route('singlebook.delete',['id'=>$singlebook->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" >Delete book</button>
    </form>
@endsection