# Icon

Displays icons. By default, the `<i>` tag is used.

~~~html
<twig:bs:Icon name="bi bi-alarm" />
~~~

## Customization

Use the `<twig:bs:Icon />` component to display icons. Customize via props:

### Properties

| Property | Type     | Default | Description                          |
|----------|----------|---------|--------------------------------------|
| **name** | `string` | `''`    | Name or identifier of the icon.      |

Additional HTML attributes can be passed directly to the component (e.g., `class`, `style`). These will be passed to the enclosing element.

## Examples

### Bootstrap Icons

If you use [Bootstrap Icons](https://icons.getbootstrap.com/):

~~~html
<twig:bs:Icon name="bi bi-check-circle" />
<twig:bs:Icon name="bi bi-exclamation-triangle" class="text-warning" />
~~~

### Font Awesome

If you use [Font Awesome](https://fontawesome.com/):

~~~html
<twig:bs:Icon name="fas fa-user" />
<twig:bs:Icon name="fab fa-github" style="font-size: 2rem;" />
~~~

## Accessibility

The component sets `aria-hidden="true"` by default, as icons are usually purely decorative. If the icon has a meaning that is not explained by surrounding text, you should pass additional attributes like `role="img"` and an appropriate `aria-label`.
