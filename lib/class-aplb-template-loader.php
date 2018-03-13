<?php

namespace APLB;

if (! class_exists('Gamajo_Template_Loader')) {
    require plugin_dir_path(__FILE__) . 'class-gamajo-template-loader.php';
}

class Template_Loader extends \Gamajo_Template_Loader
{
    protected $filter_prefix = 'aplb';
    protected $theme_template_directory = 'aplb';
    protected $plugin_directory = APLB_PLUGIN_DIR;
    protected $plugin_template_directory = 'templates';
}
