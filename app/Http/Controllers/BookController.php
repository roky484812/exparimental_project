<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store_book_page(){
        $books = Book::get();
        return view('book.add_book', ['books'=> $books]);
    }

    public function store_book(Request $req){
        $book = new Book();
        $book->book_name = $req->book_name;
        if($book->save()){
            return redirect()->back()->with(['type'=> 'success', 'message'=> 'Book Stored successfuly.']);
        }else{
            return redirect()->back()->with(['type'=> 'danger', 'message'=> 'Something went wrong.']);
        }
    }

    public function update_book_page($id){
        $book = Book::where('id', $id)->first();
        return view('book.edit_book', ['book'=> $book]);
    }

    public function update_book(Request $req){
        $update = Book::where('id', $req->id)->update([
            'book_name'=> $req->book_name
        ]);
        if($update){
            return redirect('/book/store')->with(['type'=> 'success', 'message'=> 'Book updated successfuly.']);
        }else{
            return redirect('/book/store')->with(['type'=> 'danger', 'message'=> 'Something went wrong.']);
        }
    }

    public function delete_book($id){
        $delete = Book::where('id', $id)->delete();
        if($delete){
            return redirect()->back()->with(['type'=> 'success', 'message'=> 'Book deleted successfuly.']);
        }else{
            return redirect()->back()->with(['type'=> 'danger', 'message'=> 'Something went wrong.']);
        }
    }
}
