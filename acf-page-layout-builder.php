<?php
/*
Plugin Name: ACF Page Layout Builder
Plugin URI: https://github.com/mmirus/acf-page-layout-builder
Description: Plugin for using Advanced Custom Fields for building custom page layouts.
Author: Matt Mirus
Author URI: https://github.com/mmirus
Version: 0.1
GitHub Plugin URI: https://github.com/mmirus/acf-page-layout-builder
*/

namespace APLB;

class APLB
{
    public function __construct()
    {
    }

    public function init()
    {
        // actions
        add_action('plugins_loaded', [$this, 'acf_check']);
        add_action('wp_enqueue_scripts', [$this, 'assets'], 100);
        add_action('admin_enqueue_scripts', [$this, 'admin_assets']);

        // filters
        add_filter('acf/settings/load_json', [$this, 'acf_add_json_load_point']);
        add_filter('theme_page_templates', [$this, 'add_page_template_option'], 10, 3);
        add_filter('page_template', [$this, 'add_default_templates']);
        add_filter('body_class', [$this, 'add_body_class']);
    }

    // Check if Advanced Custom Fields is loaded and deactivate w/ a message if not
    public function acf_check()
    {
        if (! class_exists('acf')) {
            add_action('admin_init', [$this, 'deactivate']);
            add_action('admin_notices', [$this, 'admin_notice_no_acf']);
        }
    }

    // deactivate this plugin
    public function deactivate()
    {
        deactivate_plugins(plugin_basename(__FILE__));
    }

    // notify that ACF is required and plugin has been deactivated
    public function admin_notice_no_acf()
    {
        printf('<div class="error notice is-dismissible"><p class="extension-message"><strong>Advanced Custom Fields Pro</strong> is required for the ACF Page Layout Builder plugin. Deactivating the <strong>ACF Page Layout Builder</strong> plugin.</p></div>');
    }

    // enqueue assets
    public function assets()
    {
        if (is_page_template('aplb-base.php')) {
            wp_enqueue_style('aplb_base', plugin_dir_url(__FILE__).'assets/aplb.css', false, null);
        }
    }

    // load admin assets
    public function admin_assets($hook)
    {
        global $post;

        if (!$post) {
            return false;
        }

        if (get_post_meta($post->ID, '_wp_page_template', true) === 'aplb-base.php') {
            wp_enqueue_style('aplb_admin', plugins_url('assets/admin.css', __FILE__));
        }
    }

    // Append this plugin's ACF JSON field definitions load point to list of load points
    public function acf_add_json_load_point($paths)
    {
        $paths[] = plugin_dir_path(__FILE__) . '/acf-json';

        return $paths;
    }

    public function add_page_template_option($page_templates, $theme, $post)
    {
        $page_templates['aplb-base.php'] = 'ACF Page Layout Builder';

        return $page_templates;
    }

    // add default templates
    public function add_default_templates($template)
    {
        global $post;

        $template_name = 'aplb-base.php';

        if (get_page_template_slug($post->ID) !== $template_name) {
            return $template;
        }

        // filter theme override template name and location
        $template_name = apply_filters('aplb_template_name', "aplb-base.php");
        $template_location = apply_filters('aplb_template_location', "aplb/");

        $theme_template = $template_location . $template_name;

        // Check if a custom template exists in the theme folder, if not, load the plugin template file
        $theme_file = locate_template(array($theme_template));

        if ($theme_file) {
            $template = $theme_file;
        } else {
            $template = dirname(__FILE__) . '/templates/' . $template_name;
        }

        return $template;
    }

    public function add_body_class(array $classes)
    {
        if (is_page_template('aplb-base.php')) {
            $classes[] = 'aplb';
        }

        return $classes;
    }
}

$aplb = new APLB();
$aplb->init();
