<?php

namespace Revlenuwe\Gearer\Facades;

use Illuminate\Support\Facades\Facade;

class Gearer extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return 'gearer';
    }
}
