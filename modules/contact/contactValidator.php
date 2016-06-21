<? php

namespace Contact;

use Form\Form;
use Respect\Validation\Validator as v;

class ContactValidator
{

    public function __construct($data) {
        global $wpdb;
        parent::__construct();

        $this->data   = $data;
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
            'errors'     => array('L\'email est non valide'),
          ),
          'message' => array(
            'value'      => $this->data['message'],
            'validators' => array('notEmpty'),
            'errors'     => array('Le message n\'est pas rempli.'),
          ),
        );
    }
}
