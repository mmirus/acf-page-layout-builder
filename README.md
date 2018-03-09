# ACF Page Layout Builder

Plugin for using Advanced Custom Fields for building custom page layouts.

# TODO

* Make partials overridable
* Refactor CSS
  * use grid to replace AFP span classes; remove extra wrappers where possible
  * use flexbox to align content at the bottom

# Overriding the base template

Create an `aplb` folder in your theme root and add a new `aplb-base.php` file to it.

# Filtering the override template location and base template name

If you want to override the templates and your theme houses its templates in a special location, you will need to use a filter to specify the correct location.

You can also filter the base template filename if needed.

## Exmaple: Sage 9

```php
add_filter('aplb_template_location', function ($template_folder) {
    return "views/aplb/";
});
```

If you want to use Blade for the templates, you will additionally need to filter the base template name:

```php
add_filter('aplb_template_name', function ($template_name) {
    return "aplb-base.blade.php";
});
```
