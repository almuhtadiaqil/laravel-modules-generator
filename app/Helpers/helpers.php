<?php

use Illuminate\Http\JsonResponse;

function module_path($module, $path = ''):string
{
    return base_path("Modules/{$module}/" . $path);
}
    function resp_success(string $message = "", mixed $data = null): JsonResponse
    {
        return response()->json([
            "status" => "OK",
            "messages" => $message,
            "data" => $data ?? [],
            "errors" => []
        ], 200);
    }

    function resp_error(string $message = "", mixed $data = null, int $code = 400): JsonResponse
    {
        return response()->json([
            "status" => "ERROR",
            "messages" => $message,
            "data" => [],
            "errors" => $data ?? [],
        ], $code);
    }

    function handle_exception($e): JsonResponse
    {
        $message = "Error";
        $code = 500;

        if ($e instanceof Exception) {
            $message = $e->getMessage();
            $code = 404;
        }

        dd($e);

        // if($e !instanceof Exception){
        //     $message = $e->getMess
        // }

        return response()->json([
            "status" => "ERROR",
            "messages" => $message,
            "data" => [],
            "errors" => [],
        ], $code);
    }
