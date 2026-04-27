<?php

declare(strict_types=1);

namespace Mitopp\BootstrapTwigComponentsBundle\Tests\Integration\Twig\Components;

use Mitopp\BootstrapTwigComponentsBundle\Tests\Common\AbstractComponentsTestCase;

final class IconTest extends AbstractComponentsTestCase
{
    public function testIconRenders(): void
    {
        $icon = $this->renderTwigComponent(
            name: 'Icon',
            data: [
                'name' => 'bi bi-house',
            ]
        );

        $crawler = $icon->crawler();

        $this->assertCount(1, $component = $crawler->filterXPath('//i'));
        $this->assertSame('icon bi bi-house', $component->attr('class'));
        $this->assertSame('true', $component->attr('aria-hidden'));
    }
}
