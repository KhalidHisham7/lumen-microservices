<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Author;

class AuthorController extends Controller
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
      $authors = Author::all();

      return $this->succesResponse($authors);
    }

    public function store(Request $request)
    {
      $rules = [
        'name' => 'required|max:255',
        'gender' => 'required|max:255|in:male,female',
        'country' => 'required|max:255'
      ];
      $this->validate($request , $rules);

      $author = Author::create($request->all());

      return $this->succesResponse($author , Response::HTTP_CREATED);
    }

    public function show($author)
    {

    }

    public function update(Request $request , $author)
    {

    }

    public function destroy($author)
    {

    }
}
