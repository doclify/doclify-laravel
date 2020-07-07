<?php

declare(strict_types=1);

namespace Doclify\Tests\Laravel;

use Doclify\Laravel\DoclifyServiceProvider;
use Doclify\Laravel\Facades\Doclify;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getPackageProviders($app)
    {
        return [DoclifyServiceProvider::class];
    }

    /**
     * {@inheritdoc}
     */
    protected function getPackageAliases($app)
    {
        return [
            'Doclify' => Doclify::class,
        ];
    }
}
