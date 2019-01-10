<?php
/*
Plugin Name: ACF Page Layout Builder
Plugin URI: https://github.com/mmirus/acf-page-layout-builder
Description: Plugin for using Advanced Custom Fields for building custom page layouts.
Author: Matt Mirus
Author URI: https://github.com/mmirus
Version: 1.0.0
GitHub Plugin URI: https://github.com/mmirus/acf-page-layout-builder
 */

namespace APLB;

define('APLB_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('APLB_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once APLB_PLUGIN_DIR . 'lib/class-aplb-template-loader.php';

class APLB
{
    public $page_template;
    public $template_loader;
    public $post_types;

    public function init()
    {
        // actions
        add_action('plugins_loaded', [$this, 'acf_check']);
        add_action('plugins_loaded', [$this, 'register_options']);
        add_action('after_setup_theme', [$this, 'set_page_template'], 10);
        add_action('after_setup_theme', [$this, 'set_post_types'], 10);
        add_action('after_setup_theme', [$this, 'register_fields'], 11);
        add_action('init', [$this, 'register_post_type']);
        add_action('wp_enqueue_scripts', [$this, 'assets'], 100);
        add_action('admin_enqueue_scripts', [$this, 'admin_assets']);

        // filters
        add_filter('theme_page_templates', [$this, 'add_page_template_option'], 10, 3);
        add_filter('the_content', [$this, 'display']);
        add_filter('body_class', [$this, 'add_body_class']);

        add_shortcode('aplb', [$this, 'shortcode']);

        $this->template_loader = new Template_Loader();
    }

    // Check if Advanced Custom Fields is loaded and deactivate w/ a message if not
    public function acf_check()
    {
        if (!class_exists('acf')) {
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

    // register options page
    public function register_options()
    {
        if (class_exists('acf')) {
            require_once APLB_PLUGIN_DIR . 'lib/options.php';
        }
    }

    // set page_template (done here to allow themes to filter the path and name)
    public function set_page_template()
    {
        $template = $this->template_loader->get_template_part('page-aplb', null, false);
        $template = ($template === 'templates/aplb/page-aplb.php') ? false : $template;
        $this->page_template = ($template) ? str_replace(get_stylesheet_directory() . '/', '', $template) : 'page-aplb.php';
    }

    // set enabled post types (besides Pages)
    public function set_post_types()
    {
        $this->post_types = apply_filters('aplb_post_types', ['aplb']);
    }

    // register ACF field group
    public function register_fields()
    {
        if (class_exists('acf')) {
            require_once APLB_PLUGIN_DIR . 'lib/fields.php';
        }
    }

    // register APLB custom post type
    public function register_post_type()
    {
        if (class_exists('acf')) {
            require_once APLB_PLUGIN_DIR . 'lib/aplb-post-type.php';
        }
    }

    // enqueue assets
    public function assets()
    {
        if (is_page_template($this->page_template) || is_singular($this->post_types)) {
            wp_enqueue_style('aplb-base', APLB_PLUGIN_URL . 'assets/aplb.css', false, null);
            wp_register_script('aplb-base', APLB_PLUGIN_URL . 'assets/aplb.js', ['jquery'], false, true);
            wp_enqueue_script('aplb-base');
        }
    }

    // load admin assets
    public function admin_assets($hook)
    {
        global $post, $current_screen;

        if (!$post) {
            return false;
        }

        if (get_post_meta($post->ID, '_wp_page_template', true) === $this->page_template || in_array($current_screen->post_type, $this->post_types)) {
            wp_enqueue_style('aplb_admin', plugins_url('assets/admin.css', __FILE__));
        }
    }

    public function add_page_template_option($page_templates, $theme, $post)
    {
        $page_templates[$this->page_template] = 'ACF Page Layout Builder';

        return $page_templates;
    }

    public function display(string $content)
    {
        global $post;

        if (get_page_template_slug($post->ID) === $this->page_template || is_singular($this->post_types)) {
            return $content . '[aplb]';
        }

        return $content;
    }

    public function add_body_class(array $classes)
    {
        if (is_page_template($this->page_template) || is_singular($this->post_types)) {
            $classes[] = 'aplb';
        }

        return $classes;
    }

    public function shortcode()
    {
        ob_start();
        $this->template_loader->get_template_part('aplb-base');
        return ob_get_clean();
    }

    public static function hex2rgb($hexString)
    {
        $hexString = preg_replace("/[^abcdef0-9]/i", "", $hexString);
        if (strlen($hexString) == 6) {
            list($r, $g, $b) = str_split($hexString, 2);
            return hexdec($r) . ", " . hexdec($g) . ", " . hexdec($b);
        }
        return false;
    }
}

$aplb = new APLB();
$aplb->init();
