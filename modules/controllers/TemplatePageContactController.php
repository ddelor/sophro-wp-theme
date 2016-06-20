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

        $error   = null;
        $success = null;

        $contact = new ContactValidator();

        return array(
            'error'   => $error,
            'success' => $success,
        );
    }
}
