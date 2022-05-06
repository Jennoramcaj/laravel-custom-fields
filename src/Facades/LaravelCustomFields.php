<?php

namespace Jennoramcaj\LaravelCustomFields\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jennoramcaj\LaravelCustomFields\LaravelCustomFields
 */
class LaravelCustomFields extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-custom-fields';
    }
}
