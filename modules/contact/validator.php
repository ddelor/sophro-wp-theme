<?php

namespace Contact;

use Respect\Validation\Validator as v;
use Form\Form;

class ContactValidator extends Form
{

    public function __construct($data) {
        global $wpdb;
        parent::__construct();

        $this->data   = $data;
        $this->data['g-recaptcha-response'] = (isset($this->data['g-recaptcha-response'])) ? $this->data['g-recaptcha-response'] : '';

        $this->fields = array(
          'user' => array(
            'value'      => $this->data['user'],
            'validators' => array('notEmpty'),
            'errors'     => array('Le nom n\'est pas rempli.'),
          ),
          'email' => array(
            'value'      => $this->data['email'],
            'validators' => function($value) {
              return v::email()->validate($value);
            },
            'errors'     => array('L\'email est non valide.'),
          ),
          'message' => array(
            'value'      => $this->data['message'],
            'validators' => array('notEmpty'),
            'errors'     => array('Le message n\'est pas rempli.'),
          ),
          // 'g-recaptcha-response' => array(
          //   'value'      => $this->data['g-recaptcha-response'],
          //   'validators' => function($value) {
          //     if (empty($this->data['g-recaptcha-response'])) {
          //       return false;
          //     } else {
          //       $recaptcha = new \ReCaptcha\ReCaptcha(RECAPTCHA_SECRET);
          //       $resp      = $recaptcha->verify($this->data['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
          //       if (!$resp->isSuccess()) {
          //         return false;
          //       }
          //       return true;
          //     }
          //   },
          //   'errors' => array('Vous devez valider le captcha.'),
          // ),
          'g-recaptcha-response' => array(
            'value'      => $this->data['g-recaptcha-response'],
            'validators' => array('notEmpty'),
            'errors'     => array('Vous devez valider le captcha.'),
          ),
        );
    }
}
