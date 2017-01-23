<?php
function include_home_controller($template)
{
    if(basename($template) == 'home.php') {
        initController('\Home\HomeController');
    }
    return $template;
}

add_action('template_include', 'include_home_controller');