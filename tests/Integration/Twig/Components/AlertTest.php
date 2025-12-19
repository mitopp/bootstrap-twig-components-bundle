<?php

declare(strict_types=1);

namespace Mitopp\BootstrapTwigComponentsBundle\Tests\Integration\Twig\Components;

use Mitopp\BootstrapTwigComponentsBundle\Tests\Common\AbstractComponentsTestCase;

final class AlertTest extends AbstractComponentsTestCase
{
    public function testAlertRenders(): void
    {
        $alert = $this->renderTwigComponent(
            name: 'Alert',
            data: [
                'color' => 'success',
            ],
        );

        $crawler = $alert->crawler();

        $this->assertCount(1, $component = $crawler->filterXPath('//div[@role="alert"]'));
        $this->assertSame('alert alert-success', $component->attr('class'));
    }

    public function testDismissibleAlertRenders(): void
    {
        $alert = $this->renderTwigComponent(
            name: 'Alert',
            data: [
                'dismissible' => true,
            ],
            blocks: [
                'dismissible' => $this->renderTwigComponent('Button:Close'),
            ]
        );

        $crawler = $alert->crawler();

        $this->assertCount(1, $component = $crawler->filterXPath('//div[@role="alert"]'));
        $this->assertStringContainsString('alert-dismissible', $component->attr('class'));
        $this->assertStringContainsString('btn-close', (string) $alert);
    }
}
