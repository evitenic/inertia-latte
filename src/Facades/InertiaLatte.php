<?php

namespace Evitenic\InertiaLatte\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Evitenic\InertiaLatte\InertiaLatte
 */
class InertiaLatte extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Evitenic\InertiaLatte\InertiaLatte::class;
    }
}
