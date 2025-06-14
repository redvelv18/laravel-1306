<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'author' => 'required|max:100',
            'released_at' => 'required|date' 
        ]);
    
        $book = Book::create([
            'title' => $validated['title'], 
            'author' => $validated['author'], 
            'released_at' => $validated['released_at'], 
        ]);
    
        return redirect()->route('books.show', $book->id)->with('status', 'Book created successfully!');
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['book' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('books.edit', ['book'=>$book]);
        return $book;
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);

        return redirect('/books/' . $book->id)->with('status','post updated successfully!');
    }
    public function destroy($id) {
        $book = Book::find($id);
        if ($book) {
            $book->delete();
        }
        return redirect('/books/')->with('status','book deleted successfully');
    }
}
