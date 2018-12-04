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
      
    }

    public function store(Request $request)
    {

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
