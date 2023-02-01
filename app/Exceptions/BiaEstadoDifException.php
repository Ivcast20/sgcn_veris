<?php

namespace App\Exceptions;

use Exception;

class BiaEstadoDifException extends Exception
{
    public function report()
    {
        //
    }

    public function render($request)
    {
        return false;
    }


}
