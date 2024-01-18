<?php

namespace App\DTO;

abstract class AbstractDTO
{
    public function toArray() : array
    {
        return get_object_vars($this);
    }
}
