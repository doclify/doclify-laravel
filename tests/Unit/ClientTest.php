<?php

declare(strict_types=1);

namespace Doclify\Tests\Laravel\Unit;

use Doclify\Client;
use Doclify\Laravel\Facades\Doclify;
use Doclify\Tests\Laravel\TestCase;

class ClientTest extends TestCase
{
    public function testGetSpace()
    {
        $this->assertInstanceOf(Client::class, Doclify::getFacadeRoot());
    }
}
