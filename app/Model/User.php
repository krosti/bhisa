<?php

App::uses('AppModel', 'Model');

class User extends AppModel {
	public $name = 'User';
	public $displayField = 'name';	
	public $validate = array(
		'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
		'name' => array(
			'rule'=>array('minLength', 3), 
			'message'=>'Se requiere un nombre de minimo 3 letras'
		),
		'first_name' => array(
			'rule'=>array('minLength', 3), 
			'message'=>'Se requiere un nombre de minimo 3 letras'
		),
		'last_name' => array(
			'rule'=>array('minLength', 3), 
			'message'=>'Se requiere un apellido de minimo 3 letras'
		),
		'password' => array(	
					'rule' => array('between', 5, 15),
					'message' => 'Debe tener un largo entre 5 y 15 caracteres.'
		),
		'passwordrep' => array(
					'rule' => 'check_password_equals',
					'message' => 'Las contrasenas no coinciden.'
		),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        ),
		'email' => array(
			'email2' => array(		
				'rule'=>'notEmpty', 
				'message'=>'Se requiere un email.',
				'last' => true
			),
			'email3' => array(			
				'rule' => array('email', true),
				'message' => 'Por favor indique una direccion de correo electronico valida.'
			),
			'check_email_exists'=>array(
				'rule'=>'check_email_exists',
				'message'=>'Direccion de correo existente.',
				'on'=>'create'
			)
		),
		'emailrep' => array(
			'emailrep2' => array(		
				'rule'=>'notEmpty', 
				'message'=>'Se requiere un email',
				'last' => true
			),
			'emailrep3' => array(			
				'rule' => array('email', true),
				'message' => 'Por favor indique una direccion de correo electronico valida.'
			),
			'emailrep4' => array(			
				'rule' => 'check_emails_equals',
				'message' => 'Los emails no coinciden!!!'
			),
		)
	);

	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
	    return true;
	}
		
}