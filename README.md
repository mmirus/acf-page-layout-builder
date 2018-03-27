# ACF Page Layout Builder (APLB)

Plugin for using Advanced Custom Fields for building custom page layouts.

Thanks to [MWDelaney's similar plugin](https://github.com/MWDelaney/acf-flexible-content-blocks) for some insights how to implement this.

# TODO

* reduced / no padding option on sections?
* Replace the_content instead of appending to it?
* Enable extending content types
* filter SEO title?
* document adding taxonomies to CPT?
* look into changing or enabling filtering of CPT slug (/aplb/post-name/)?
* allow overriding templates per post type?

# Table of Contents

* [Overriding the page template](#overriding-the-page-template)
* [Overriding template parts](#overriding-template-parts)
* [Filtering the templates](#filtering-the-templates)
  * [Example: Sage 9](#example-sage-9)
* [Using APLB with other post types](#using-aplb-with-other-post-types)

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

# Using APLB with other post types

By default, APLB is only available for pages. As a secondary option, you can enable the APLB custom post type on the settings page.

_As with anytime you register a CPT, make sure to flush your permalinks after enabling the APLB CPT. (Setthings -> Permalinks -> Save.)_

If you want to use it with your own post type, you can filter `aplb_post_types`:

```php
add_filter('aplb_post_types', function ($post_types) {
    $post_types[] = 'my-post-type';
    return $post_types;
});
```

As noted in the section on overriding template parts above, by default the layouts you create are appended to the_content in your default page template. When the layouts are built on another post type besides pages, however, the output will by default be appended to the_content in the template used for that post type following the WordPress template hierarchy.
