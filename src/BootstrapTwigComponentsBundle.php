<?php

declare(strict_types=1);

namespace Mitopp\BootstrapTwigComponentsBundle;

use Mitopp\BootstrapTwigComponentsBundle\DependencyInjection\BootstrapTwigComponentsExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class BootstrapTwigComponentsBundle extends AbstractBundle
{
    protected string $extensionAlias = 'mitopp_bootstrap_twig_components';

    public function getContainerExtension(): ExtensionInterface
    {
        return new BootstrapTwigComponentsExtension();
    }
}
