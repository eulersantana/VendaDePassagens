<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel{
	public $name = 'User';
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'E-mail obrigatorio.'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Senha obrigatorio.'
            )
        ),
        'tipo' => array(
            'valid' => array(
                'rule' => array('inList', array('Funcionario', 'Cliente')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

}
?>