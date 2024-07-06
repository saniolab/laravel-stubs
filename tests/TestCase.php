<?php

namespace Saniolab\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Saniolab\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
