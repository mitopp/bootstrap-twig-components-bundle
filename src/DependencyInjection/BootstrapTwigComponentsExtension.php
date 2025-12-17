<?php

declare(strict_types=1);

namespace Mitopp\BootstrapTwigComponentsBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

final class BootstrapTwigComponentsExtension extends Extension implements PrependExtensionInterface
{
    /**
     * @param array<string, mixed> $configs
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new PhpFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.php');
    }

    public function prepend(ContainerBuilder $container): void
    {
        $container->prependExtensionConfig('twig_component', [
            'defaults' => [
                'Mitopp\\BootstrapTwigComponentsBundle\\Twig\\Components\\' => [
                    'template_directory' => '@Mitopp/components/',
                    'name_prefix' => 'bs',
                ],
            ],
        ]);

        /** @var string $projectDir */
        $projectDir = $container->getParameter('kernel.project_dir');
        $bundleTemplatesOverrideDir = $projectDir.'/templates/bundles/BootstrapTwigComponentsBundle/';

        $container->prependExtensionConfig('twig', [
            'paths' => is_dir($bundleTemplatesOverrideDir)
                ? [
                    'templates/bundles/BootstrapTwigComponentsBundle/' => 'bs',
                    \dirname(__DIR__).'/../templates/' => 'bs',
                ]
                : [
                    \dirname(__DIR__).'/../templates/' => 'bs',
                ],
        ]);
    }
}
