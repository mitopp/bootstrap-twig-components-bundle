<?php

declare(strict_types=1);

namespace Mitopp\BootstrapTwigComponentsBundle\Tests\Integration\Twig\Components;

use Mitopp\BootstrapTwigComponentsBundle\Tests\Common\AbstractComponentsTestCase;

final class ButtonTest extends AbstractComponentsTestCase
{
    public function testButtonRenders(): void
    {
        $button = $this->renderTwigComponent(
            name: 'Button',
            data: [
                'type' => 'submit',
                'color' => 'secondary',
                'outline' => true,
                'size' => null,
                'disabled' => false,
            ]
        );

        $crawler = $button->crawler();

        $this->assertCount(1, $component = $crawler->filterXPath('//button'));
        $this->assertSame('btn btn-outline-secondary', $component->attr('class'));
        $this->assertSame('submit', $component->attr('type'));
    }

    public function testCloseButtonRenders(): void
    {
        $button = $this->renderTwigComponent(
            name: 'Button:Close',
            data: [
                'label' => 'Close modal',
            ],
        );

        $crawler = $button->crawler();

        $this->assertCount(1, $component = $crawler->filterXPath('//button'));
        $this->assertSame('btn btn-close', $component->attr('class'));
        $this->assertSame('button', $component->attr('type'));
        $this->assertSame('Close modal', $component->attr('aria-label'));
    }
}
