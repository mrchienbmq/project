<?php

namespace App\Http\Controllers;

use App\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function BookList(){
        $books = BookModel::all();

        $books = BookModel::orderBy("book_id","asc")->paginate(10);

        return view("book.list",compact("books"));
    }

    public function BookSearch(Request $request){

    }
}
