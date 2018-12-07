<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    //Coming directly from other services, so no need to return a json response, a normal response is enough.
    public function succesResponse($data , $code = Response::HTTP_OK)
    {
      return response($data, $code)->header('Content-Type', 'application/json');
    }

    public function errorResponse($message , $code)
    {
      return response()->json(['error' => $message , 'code' => $code] , $code);
    }

    //Coming directly from other services, so no need to return a json response, a normal response is enough.
    public function errorMessage($message , $code)
    {
      return response($message, $code)->header('Content-Type', 'application/json');
    }
}


?>
