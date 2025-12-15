<?php

declare(strict_types=1);

namespace Mitopp\BootstrapTwigComponentsBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class BootstrapTwigComponentsBundle extends AbstractBundle
{
    protected string $extensionAlias = 'mitopp_bootstrap_twig_components';

    /**
     * @param array<string, mixed> $config
     */
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.php');
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
                ->stringNode('foo')
                    ->info('The foo parameter')
                    ->example('bar')
                ->end()
            ->end()
        ;
    }
}
