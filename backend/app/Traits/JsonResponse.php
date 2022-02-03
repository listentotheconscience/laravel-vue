<?php

namespace App\Traits;

use Illuminate\Support\Facades\Response;

trait JsonResponse
{
    public function success($message, $data, $code)
    {

        $ret = [
            'message' => $message,
            'data' => $data
        ];

        return Response::json($ret, $code);
    }

    public function error($message, $code = 404)
    {
        $ret = ['message' => $message];

        return Response::json($ret, $code);
    }
}
