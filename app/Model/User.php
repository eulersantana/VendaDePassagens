<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel{
	public $name = 'User';
    // var  $hasAndBelongsToMany = array('PassagensUser');

    public $hasOne = array(
        'Compra' => array(
            'className' => 'Compra',
            'foreignKey' => 'user_id'
            )
        );
    public $validate = array(
        'username' => array(
            'required'   => true,
            'required' => array(
                'rule' => array('notEmpty'),                
                'message' => 'E-mail obrigatorio.'
            )
        ),
        'password' => array(
            'required'   => true,
            'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'Senha obrigatorio.'
                    )
            ),
            'between'=>array(
                'rule'=>array('between',6,8),
                'required' => array(
                        'rule' => array('notEmpty'),
                        'message' => 'Senha entre 6 a 8 dígitos.'
                           ),
            ),
        'username' => 'email',
    );


    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

}
?>