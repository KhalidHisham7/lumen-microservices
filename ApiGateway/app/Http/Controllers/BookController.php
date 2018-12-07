<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\BookService;
use App\Services\AuthorService;
use App\Book;

class BookController extends Controller
{

    use ApiResponser;

    public $bookService;
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService, AuthorService $authorService)
    {
      $this->bookService = $bookService;
      $this->authorService = $authorService;
    }

    public function index()
    {
      return $this->succesResponse($this->bookService->obtainBooks());
    }

    public function store(Request $request)
    {
      $this->authorService->obtainAuthor($request->author_id);
      return $this->succesResponse($this->bookService->createBook($request->all(), Response::HTTP_CREATED));
    }

    public function show($book)
    {
      return $this->succesResponse($this->bookService->obtainBook($book));
    }

    public function update(Request $request , $book)
    {
      return $this->succesResponse($this->bookService->editBook($request->all(), $book));
    }

    public function destroy($book)
    {
      return $this->succesResponse($this->bookService->deleteBook($book));
    }
}
