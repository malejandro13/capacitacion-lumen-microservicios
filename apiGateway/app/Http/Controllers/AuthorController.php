<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class AuthorController extends Controller
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
     * Return authors list
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //return $this->successResponse();
    }

    /**
     * Create an instance of Author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Return an specific author
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {

    }

    /**
     * Update the information of an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Removes an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {

    }
}
