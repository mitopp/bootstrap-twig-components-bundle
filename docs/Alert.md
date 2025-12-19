# Alert

Displays flexible alert messages.

~~~html

<twig:bs:Alert content="Default alert"/>
~~~

## Customization

Use the `<twig:bs:Alert />` component to display messages. Customize via props:

### Properties

| Property        | Type     | Default   | Description                                                                         |
|-----------------|----------|-----------|-------------------------------------------------------------------------------------|
| **color**       | `string` | `default` | Contextual [color](https://getbootstrap.com/docs/5.3/components/buttons/#variants). |
| **dismissible** | `bool`   | `false`   | Whether the alert can be dismiss inline.                                            |
| **content**     | `string` | `''`      | Default text content. Will be overridden by block `content`.                        |

### Blocks

Use Twig blocks to inject more complex content:

| Block     | Description                                                               |
|-----------|---------------------------------------------------------------------------|
| `content` | Main button content (text, icons, etc.) Overrides the `content` property. |

## Examples

### Default

Uses default properties (`color="default"`).

~~~html

<twig:bs:Alert content="Default alert"/>
~~~

### Colors

Use the `color` property for different styles.

~~~html

<twig:bs:Alert color="primary" content="Primary"/>
<twig:bs:Alert color="secondary" content="Secondary"/>
<twig:bs:Alert color="success" content="Success"/>
<twig:bs:Alert color="warning" content="Warning"/>
<twig:bs:Alert color="danger" content="Danger"/>
<twig:bs:Alert color="info" content="Info"/>
<twig:bs:Alert color="light" content="Light"/>
<twig:bs:Alert color="dark" content="Dark"/>
~~~

If there are additional colors in a customized version of the Bootstrap Framework, these can naturally also be used. (See [Color Variants](ColorVariants.md) for more information.)

### Dismiss state

Set `dismissible="true"`.

~~~html

<twig:bs:Alert color="primary" dismissible="true" content="Dismissible alert"/>
~~~

### Content block (complex content)

Use the `content` block to inject more complex content like text, icons, etc.

~~~html
<twig:bs:Alert color="success">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</twig:bs:Alert>
~~~
