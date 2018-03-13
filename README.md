# ACF Page Layout Builder

Plugin for using Advanced Custom Fields for building custom page layouts.

Thanks to [MWDelaney's similar plugin](https://github.com/MWDelaney/acf-flexible-content-blocks) for some insights how to implement this.

# TODO

* Enable full-width WYSIWYG sections (see legacy giving form)
* fix title + content bottom
* Enable extending content types

# Overriding the page template

By default, the layouts you create are appended to the_content in your default page template. Commonly, you will wish to create a template file `page-aplb.php` in your theme to integrate the layout more nicely (e.g., display it full width or with reduced header elements). All you need to do is create a page template as you normally would and include `the_content()`.

Note that if you change your template location (e.g., by overriding the template) you'll need to reselect it in the page editor.

# Overriding template parts

Create an `aplb` folder in your theme and copy the desired plugin template files to it as a starting point.

# Filtering the templates

This plugin uses [Gary Jones' template loader](https://github.com/GaryJones/Gamajo-Template-Loader). You can use the filters it provides to adjust things like the location of your override templates in your theme.

## Example: Sage 9

### Place override templates in Sage 9 `views` folder

```php
add_filter('aplb_template_paths', function ($file_paths) {
    $file_paths[0] = get_stylesheet_directory() . "/views/aplb/";
    return $file_paths;
});
```

### Use Blade

```php
add_filter('aplb_get_template_part', function ($templates, $slug = null, $name = null) {
    $blade_templates = array_map(function ($template) {
        return str_replace('.php', '.blade.php', $template);
    }, $templates);

    return array_merge($blade_templates, $templates);
});
```
