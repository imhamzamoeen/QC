<?php

namespace App\Exceptions;

use Exception;

class ExceptionJsonResponse extends Exception
{
    public function render($exception)
    {
        return [
            'message' => 'Exception',
            'status' => 403,
            'response' => isset($exception->errorInfo[2]) ? $exception->errorInfo[2] : $exception->getMessage(),
        ];
    }
}
