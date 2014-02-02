<?php
	class Passagem extends AppModel{
		public $name = 'Passagem';

		public $belongsTo = array('Rota');

		public $hasOne = array(
			'Pagamento' => array(
				'className' => 'Pagamento',
				'foreignKey' => 'passagem_id'
				)
			);
	}
?>