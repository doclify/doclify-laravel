<?php

declare(strict_types=1);

namespace Doclify\Tests\Laravel\Unit;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Orchestra\Testbench\Concerns\CreatesApplication;

class ConfigTest extends BaseTestCase
{
    use CreatesApplication;

    public function testGetConfig()
    {
        $this->assertSame('test', config('doclify.repository'));
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('doclify.repository', 'test');
    }
}
