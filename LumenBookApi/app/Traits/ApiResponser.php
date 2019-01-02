<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Building success response
     * @param $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return \response()->json(['data' => $data], $code);
    }


    public function errorResponse($message, $code)
    {
        return \response()->json(['error' => $message, 'code' => $code], $code);
    }

}