<?php

namespace AbdelhamidErrahmouni\LaravelABTesting\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AbdelhamidErrahmouni\LaravelABTesting\LaravelABTesting
 */
class LaravelABTesting extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AbdelhamidErrahmouni\LaravelABTesting\LaravelABTesting::class;
    }
}
