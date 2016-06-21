<?php

namespace Controller;

use Controller\Base;
use Contact\ContactValidator;

class TemplatePageContactController extends Base
{
    protected function get(){
      return array();
    }

    protected function post(){

        var_dump($_POST);

        $error     = false;
        $success   = false;
        $base_path = dirname(realpath(__FILE__));

        $contact   = new ContactValidator($_POST);

        if($contact->isValid()){
            // CREATE EMAIL CONTENT
            $content   = file_get_contents($base_path .'/../form-contact/contact.html');
            $content   = str_replace('{message}', $_POST['message'], $content);
            $content   = str_replace('{user}', $_POST['user'], $content);
            $content   = str_replace('{email}', $_POST['email'], $content);

            // DEFINE HEADERS
            $headers   = array('Content-Type: text/html; charset=UTF-8');
            $headers[] = 'From: '.$_POST['user'].' <' . $_POST['email'] . '>' . "\r\n";

            // SEND EMAIL
            wp_mail(
                get_bloginfo('admin_email'), //Email
                "Demande de contact", //Sujet
                $content, //Message
                $headers
            );

            // CLEAN FORM
            $_POST = array();
        }
        $error = $contact->getErrors();

        return array(
            'error'   => $error,
            'success' => $success,
        );
    }
}
