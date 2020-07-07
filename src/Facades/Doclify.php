<?php

declare(strict_types=1);

namespace Doclify\Laravel\Facades;

use Doclify\Client;
use Illuminate\Support\Facades\Facade;

class Doclify extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Client::class;
    }
}
