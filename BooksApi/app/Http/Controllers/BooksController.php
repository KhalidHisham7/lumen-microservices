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
      $rules = [
        'title' => 'required|max:255',
        'description' => 'required|max:255',
        'price' => 'required|min:1|gte:1',
        'author_id' => 'required|min:1',
      ];
      $this->validate($request, $rules);

      $book = Book::create($request->all());

      return $this->succesResponse($book , Response::HTTP_CREATED);
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
