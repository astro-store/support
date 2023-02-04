<?php

namespace AstroStore\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AstroStore\Support\Support
 */
class Support extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AstroStore\Support\Support::class;
    }
}
