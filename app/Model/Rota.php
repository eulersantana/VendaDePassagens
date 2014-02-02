<?php
	class Rota extends AppModel {

		public $name = 'Rota';
		public $virtualFields = array(
			 'trajeto' => 'CONCAT(inicio, " - " , fim, " - " , data_hora)'
			 );
		
		public $hasMany = array(
			'Veiculo' => array(
				'className' => 'Veiculo',
				'foreignKey' => 'rota_id'
				),
			'Promocao' => array(
				'className' => 'Promocao',
				'foreignKey' => 'rota_id'
				)
			);
	}
?>