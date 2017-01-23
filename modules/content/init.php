<?php
function include_content_controller($template)
{
    if(basename($template) == 'content.php') {
        initController('\Content\ContentController');
    }
    return $template;
}

add_action('template_include', 'include_content_controller');