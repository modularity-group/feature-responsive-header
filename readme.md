# feature-responsive-header

This module builds on WordPress, Modularity and jQuery.

Creates a solid site header with logo, menus for desktop and mobile and widgets.

---

Version: 1.1.1

Author: Ben @ https://modularity.group

License: MIT

---

You may customize the header's base styles with setting the variables:

```
:root {
  --header-height: 70px;
  --header-offset: var(--base-offset);
  --header-background: var(--base-color-text);
  --header-color: var(--base-color-background);
  --header-color-accent: var(--base-color-accent);
}
```

You may switch the header's mode with setting a body class:

```
add_filter('body_class', function($classes) {
    return array_merge($classes, array( 'is-header-mode-mobilefirst' ));
});
```

You can customize most features and output with the existing actions:

```
add_action('after_setup_theme', 'feature_responsive_header_register_menus');
add_action('widgets_init', 'feature_responsive_header_register_sidebars');
add_action("modularity_template_header", "feature_responsive_header_template");
add_action("feature_responsive_header_end", "feature_responsive_header_menu", 20);
add_action("feature_responsive_header_end", "feature_responsive_header_menu_trigger", 30);
add_action("feature_responsive_header_end", "feature_responsive_header_widgets", 40);
add_action("feature_responsive_header_menu_end", "your_something");
```

---

1.1.1 | add modal menu inner wrap for scrolling on overflow

1.1.0 | add mobile first mode, update state classnames, simplify widgets, tweak menu content

1.0.6 | update hooks with `config-site-template`

1.0.5 | manage body `is-scrolled` class & extend docs

1.0.4 | rename class to `site-layout-container`

1.0.3 | release as starter module

1.0.2 | switch to `core-module-style-variables`

1.0.1 | extend consumed css variables

1.0.0 | initial stable release
