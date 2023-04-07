<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books',[
            'books'=>$books
        ]);
    }

    public function create(){
        return view('bookform');
    }

    public function store(){
        $book = new Book();

        $book->title = request('title');
        $book->author = request('author');
        $book->edition = request('edition');
        $book->college = request('college');
        $book->copies = request('copies');
        $book->category = request('category');
        $book->ISBN = request('ISBN');

        $book->save();

        return redirect('/books');
    }

    public function show($id){
        $singlebook = Book::find($id);

        return view('singlebook',[
            'singlebook'=>$singlebook
        ]);
    }
}
