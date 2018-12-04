<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Book;

class BooksController extends Controller
{

    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
      $books = Book::all();

      return $this->succesResponse($books);
    }

    public function store(Request $request)
    {

    }

    public function show($book)
    {

    }

    public function update(Request $request , $book)
    {

    }

    public function destroy($book)
    {

    }
}
