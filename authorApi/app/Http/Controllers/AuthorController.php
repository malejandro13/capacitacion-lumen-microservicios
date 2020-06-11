<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
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
     * Return authors list
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        return $authors;
    }

    /**
     * Create an instance of author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Este es nuestro metodo store';
    }

    /**
     * Return an especific author
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
        return 'Este es nuestro  metodo show';
    }

    /**
     * Update the information of an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        return 'Este es nuestro  metodo update';
    }

    /**
     * Removes an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {  
        return 'Este es nuestro  metodo destroy';
    }
}
