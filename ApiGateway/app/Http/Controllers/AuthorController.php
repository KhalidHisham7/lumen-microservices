<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;
use App\Author;

class AuthorController extends Controller
{
    use ApiResponser;

    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
      return $this->succesResponse($this->authorService->obtainAuthors());
    }

    public function store(Request $request)
    {
      return $this->succesResponse($this->authorService->createAuthor($request->all(), Response::HTTP_CREATED));
    }

    public function show($author)
    {
      return $this->succesResponse($this->authorService->obtainAuthor($author));
    }

    public function update(Request $request , $author)
    {
      return $this->succesResponse($this->authorService->editAuthor($request->all(), $author));
    }

    public function destroy($author)
    {
      return $this->succesResponse($this->authorService->deleteAuthor($author));
    }
}
