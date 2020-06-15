<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponse;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return books list
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return $this->successResponse($books);
    }

    /**
     * Create an instance of Book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1',
        ];

        $this->validate($request, $rules);

        $book = Book::create($request->all());

        return $this->successResponse($book, Response::HTTP_CREATED);
    }

    /**
     * Return an specific book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        // METHOD
    }

    /**
     * Update the information of an existing book
     * @return Illuminate\Http\Response
     */

     public function update(Request $request, $book)
     {
        // METHOD
     }

     /**
      * Removes an existing book
      * @return Illuminate\Http\Response
      */
    public function destroy($book)
    {
        // METHOD
    } 
}
