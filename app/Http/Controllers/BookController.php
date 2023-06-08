<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    //show and get all books
    public function index() {
        return view('books.manage', [
            'books' => Book::latest()->filter
            (request(['tag', 'search']))->paginate(6)
        ]);
    }

    //show single book
    public function show(Book $book) {
        return view('books.show', ['book' => $book ]);
    }

    //show create form
    public function create() {
        return view('books.create');
    }

    //store book data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'tags' => 'required',
        ]);

        
        Book::create($formFields);

        return redirect('/')->with('success', 'Book entry created successfully!');
    }

    // Show Edit Form
    public function edit(Book $book) {
        return view('books.edit', ['book' => $book]);
    }

    // Update book Data
    public function update(Request $request, Book $book) {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'tags' => 'required',
        ]);

        $book->update($formFields);

        return redirect('/')->with('message', 'Book updated successfully!');
    }

    // Delete Book
    public function delete(Book $book) {

        $book->delete();
        return redirect('/')->with('message', 'Book deleted successfully!');
    }

     //Manage books
    public function manage() {
       return view('books.manage', ['books' => listings()->get()]);
    }
}