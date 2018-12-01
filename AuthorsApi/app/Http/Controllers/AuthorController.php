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
      $author = Author::findOrFail($author);

      return $this->succesResponse($author);
    }

    public function update(Request $request , $author)
    {
      $author = Author::findOrFail($author);

      $rules = [
        'name' => 'max:255',
        'gender' => 'max:255|in:male,female',
        'country' => 'max:255'
      ];
      $this->validate($request , $rules);

      $author->fill($request->all());
      if($author->isClean())
      {
        return $this->errorResponse("At least one value must change" , Response::HTTP_UNPROCESSABLE_ENTITY);
      }
      $author->save();

      return $this->succesResponse($author);
    }

    public function destroy($author)
    {
      $author = Author::findOrFail($author);

      $author->delete();

      $this->succesResponse($author);
    }
}
