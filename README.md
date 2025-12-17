# Bootstrap Twig Components Bundle


> [!WARNING]  
> This Bundle is experimental and subject to change in a future release.

This bundle allows you to create robust and reusable [Twig components](https://symfony.com/bundles/ux-twig-component/current/index.html), styled by the [Bootstrap Framework](https://getbootstrap.com/). This bundle does not deliver Bootstrap CSS/JavaScript itself. This keeps control of the user.

## Requirements

- PHP v8.2.x
- Symfony v7.3.x
- Bootstrap v5.3.x

## Installation

Run the following command to install:

```shell
$ composer require mitopp/bootstrap-twig-components-bundle
```

If you use `Symfony Flex` in your application, you are ready.
Otherwise, keep reading because you need to perform some manual configuration.

### Manual Configuration for Applications Not Using Symfony Flex

In most Symfony applications **you don't need to make any of the following changes**.
These steps are only required for applications that have opted not to use Symfony Flex.

First, register two bundles in your application. Edit the `config/bundles.php`
file and add the following:

```php
return [
    // ...
    Mitopp\BootstrapTwigComponentsBundle\BootstrapTwigComponentsBundle::class => ['all' => true],
    // ...
];
```

That's all! You are now ready to use TwigComponents in your application.

## Components

- [ ] [Alert]() *TBD*
- [x] [Buttons](docs/Button.md) for actions in forms, dialogs, and more.
  - [ ] [Close]() *TBD*
  - [ ] [Link]() *TBD*
- [ ] [Card]() *TBD*
- [ ] [Icon]() *TBD*
- [ ] [Toast]() *TBD*

## Contributing

If you want to contribute to the project and make it better, your help is very welcome. For major changes, please open an issue first to discuss what you would like to change. Please make sure to update tests as appropriate.

## License

This bundle is licensed under the [MIT License](LICENSE).
