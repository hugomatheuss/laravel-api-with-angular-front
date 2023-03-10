<?php

namespace App\Exceptions;

use Exception;

class EletrodomesticoException extends Exception
{
    public function render($request)
    {       
        return response()->json([
            "error" => true,
            "code" => $this->getCode(),
             "message" => $this->getMessage()
        ]);   
    }
}
