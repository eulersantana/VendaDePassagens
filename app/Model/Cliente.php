<?php 	
	class Cliente extends AppModel{
		public $name = 'Cliente';
		var $useTable = 'users';

		public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
	}
 ?>