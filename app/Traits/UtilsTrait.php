<?php

namespace App\Traits;

trait UtilsTrait
{
    public function onlyNumbers($valor)
    {
        return preg_replace("/[^0-9]/", "", $valor);
    }
}