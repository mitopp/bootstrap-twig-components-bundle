<?php

declare(strict_types=1);

namespace Mitopp\BootstrapTwigComponentsBundle\Tests\Common;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\UX\TwigComponent\Test\InteractsWithTwigComponents;

abstract class AbstractComponentsTestCase extends KernelTestCase
{
    use InteractsWithTwigComponents;

    protected static function getKernelClass(): string
    {
        return TestKernel::class;
    }

    protected static function ensureKernelShutdown(): void
    {
        $wasBooted = static::$booted;

        parent::ensureKernelShutdown();

        if ($wasBooted) {
            restore_exception_handler();
        }
    }
}
