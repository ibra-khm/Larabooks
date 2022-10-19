<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;   


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index", 
        ["books" => Book::latest()->filter(Request(['search']))->paginate(4)
    ]);
    }

    public function show()
    {
        return view('show', ["book" => Book::find(@request("id"))]);
    }
    public function create()
    {
        return view("create", ["authors"=>Author::all()]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $formFields = $request->validate([
        //     'title' => "required",
        //     'author_id' => "required",
        //     'language' => "required",
        //     'country' => "required",
        //     'year' => "required",
        //     'pages' => "required",
        //     'description' => "required"

        // ]);
        // dd($formFields);
        $book = new Book;
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->language = $request->language;
        $book->country = $request->country;
        $book->year = $request->year;
        $book->pages = $request->pages;
        $book->description = $request->description;

        // $newImageName = time () . '-' . $request->title . '.' . $request->image->extension();
        // $formFields['image'] = $request->image->move(public_path('images'), $newImageName);
        if($request->hasFile('image'))
        {
            $book->image = $request->file('image')->store('images', 'public');
        }
        

         $book->save();

        // ddd($request);
        
        return redirect('/')->with("message", "Book Added Successfully!");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view("edit", ['book' => Book::findOrFail(@request('id'))]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formFields = $request->validate([
            'title' => "required",
            'author_id' => "required",
            'language' => "required",
            'country' => "required",
            'year' => "required",
            'pages' => "required",
            'description' => "required",
        ]);
        if ($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        Book::where('id', @request('id'))->update($formFields);
        return redirect('/');
    }
   
    public function destroy($id)
        {   
            Book::where('id', $id)->delete();
            return redirect('/')->with("message", "Book Deleted Successfully!");
        }
        public function authorsBooks($id)
        {
            $author = Author::findOrFail($id);
            $books = $author->books;
            return view('author', compact('books', 'author'));
        }
    
}
