<?php
function include_contact_controller($template)
{
    if(basename($template) == 'contact.php') {
        initController('\Contact\ContactController');
    }
    return $template;
}

add_action('template_include', 'include_contact_controller');