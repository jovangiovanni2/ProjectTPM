<?php

namespace App\Http\Controllers;

use App\Models\Book; 
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function view(){
        $books = Book:: all();
        return view('welcome', compact('books'));
    }

    public function create(){
        return view('createBook');
    }

    public function store(Request $request){
        Book::create([
            'brand' => $request->brand,
            'type'=> $request->type,
            'datebuy'=> $request->datebuy,
            'quantity'=> $request->quantity
        ]);
        return redirect(route('view'));
    }
}