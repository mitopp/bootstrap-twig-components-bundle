# Button

Displays a button, used for actions, submitting forms, etc.

~~~twig
<twig:bs:Button color="primary" content="Primary button" />
<twig:bs:Button color="secondary" content="Secondary button" class="ms-2" />
~~~

## Customization

Use the `<twig:bs:Button>` component for interactive elements. Customize via props:

### Properties

| Property     | Type     | Default   | Description                                                                                                               |
|--------------|----------|-----------|---------------------------------------------------------------------------------------------------------------------------|
| **type**     | `string` | `button`  | Button [type](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/button#type) (e.g. 'submit', 'reset'). |
| **color**    | `string` | `default` | Contextual [color](https://getbootstrap.com/docs/5.3/components/buttons/#variants).                                       |
| **outline**  | `bool`   | `false`   | Whether to use [outline](https://getbootstrap.com/docs/5.3/components/buttons/#outline-buttons) style.                    |
| **size**     | `string` | `null`    | Button [size](https://getbootstrap.com/docs/5.3/components/buttons/#sizes) ('lg', 'sm', or null for default)              |
| **disabled** | `bool`   | `false`   | Whether the button is disabled.                                                                                           |
| **content**  | `string` | `''`      | Default text content. Will be overridden by block `content`.                                                              |

### Blocks

Use Twig blocks to inject more complex content:

| Block     | Description                                                               |
|-----------|---------------------------------------------------------------------------|
| `content` | Main button content (text, icons, etc.) Overrides the `content` property. |

## Examples

### Default

Uses default properties (`type="button"`, `color="default"`").

~~~twig
<twig:bs:Button content="Default button" />
~~~

### Types

Use the `type` property for different button types.

~~~twig
<twig:bs:Button type="submit" color="success" content="Submit" />
<twig:bs:Button type="reset" color="secondary" content="Reset" />
~~~

### Colors

Use the `color` property for different styles.

~~~twig
<twig:bs:Button color="primary" content="Primary" />
<twig:bs:Button color="secondary" content="Secondary" />
<twig:bs:Button color="success" content="Success" />
<twig:bs:Button color="warning" content="Warning" />
<twig:bs:Button color="danger" content="Danger" />
<twig:bs:Button color="info" content="Info" />
<twig:bs:Button color="light" content="Light" />
<twig:bs:Button color="dark" content="Dark" />
~~~

If there are additional colors in a customized version of the Bootstrap Framework, these can naturally also be used.

### Outline variants

Set `outline="true"`.

~~~twig
<twig:bs:Button color="primary" outline="true" content="Primary" />
<twig:bs:Button color="secondary" outline="true" content="Secondary" />
<twig:bs:Button color="success" outline="true" content="Success" />
<twig:bs:Button color="warning" outline="true" content="Warning" />
<twig:bs:Button color="danger" outline="true" content="Danger" />
<twig:bs:Button color="info" outline="true" content="Info" />
<twig:bs:Button color="light" outline="true" content="Light" />
<twig:bs:Button color="dark" outline="true" content="Dark" />
~~~

### Sizes

Use the `size` property for different sizes.

~~~twig
<twig:bs:Button size="lg" color="primary" content="Large button" />
<twig:bs:Button size="sm" color="primary" content="Small button" />
~~~

If there are additional sizes in a customized version of the Bootstrap Framework, these can naturally also be used.

### Disabled state

Set `disabled="true"`.

~~~twig
<twig:bs:Button color="primary" disabled="true" content="Disabled button" />
~~~

### Content block (complex content)

Use the `content` block to inject more complex content like text, icons, etc.

~~~twig
<twig:bs:Button color="primary">
    <strong>Delete</strong> me
</twig:bs:Button>
~~~
