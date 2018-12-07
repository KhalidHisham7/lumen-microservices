<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
  use ConsumesExternalService;

  public $baseUri;

  public function __construct()
  {
    $this->baseUri = config('services.books.base_uri');
  }

  public function obtainBooks()
  {
    return $this->performRequest('GET' , '/books');
  }
}
