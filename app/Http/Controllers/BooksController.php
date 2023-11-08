<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function book(Request $request)
    {
        $code = $request->input('book_code');
        $book = Books::where('code' , $code)->first();
        if(!$book)
        {
            echo "No data";
            return;
        }
        return view('Books.show',['book' => $book]);
    }
}
